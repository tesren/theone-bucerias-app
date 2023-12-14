<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Unit;
use App\Models\View;
use App\Mail\NewLead;
use App\Models\Message;
use App\Models\PaymentPlan;
use Illuminate\Http\Request;
use App\Models\ConstructionUpdate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Spatie\Honeypot\ProtectAgainstSpam;
use Illuminate\Support\Facades\Validator;


class PublicPagesController extends Controller
{
    

    public function home(){

        $studios = Unit::where('bedrooms', 0)->get();
        $one_bedrooms = Unit::where('bedrooms', 1)->get();
        $two_bedrooms = Unit::where('bedrooms', 2)->limit(6)->get();
        $three_bedrooms = Unit::where('bedrooms', 3)->get();

        return view('home', compact('studios', 'one_bedrooms', 'two_bedrooms', 'three_bedrooms'));
    }

    public function inventory(){
        $units = Unit::all();
        $views = View::all();

        return view('inventory', compact('units', 'views') );
    }

    public function unit($id){
        $unit = Unit::find($id);
        $plans = PaymentPlan::all();

        return view('unit', compact('unit', 'plans'));
    }

    public function construction(){
        $updates = ConstructionUpdate::orderBy('date', 'desc')->get();

        return view('construction', compact('updates'));
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function sendMail(Request $request){

        $validator = Validator::make( $request->all(), [
            'name'       => 'required|string|min:1|max:255',
            'email'      => 'required|email|string|max:255',
            'messsage'    => 'nullable|string|max:500',
        ]);

        if ( $validator->fails() ) {
            return redirect()->back()->withInput()->with(['errors'=> $validator->errors()->all()]);
        }
        else{
            $msg = new Message();

            $msg->name = $request->input('name');
            $msg->email = $request->input('email');
            $msg->phone = $request->input('phone');
            $msg->content = $request->input('message');
            $msg->url = $request->input('url');

            $msg->save();

            //solo en landing de agendar cita
            $contact_pref = $request->input('contact_method');
            $ap_date = $request->input('ap_date');
            $ap_time = $request->input('ap_time');

            //solo landing page de cotizador
            $unit_id = $request->input('down_unit_id');
            $plan_id = $request->input('down_plan_id');

            //para el webhook
            $type = "Contacto desde el sitio web de The One Residences";

            if( isset($contact_pref) ){
                $msg->ap_time = $ap_time;
                $msg->ap_date = $ap_date;
                $msg->contact_pref = $contact_pref;
                $type = 'El cliente dejó sus datos y está interesado en una cita en The One Residences el día '.$ap_date.' a las '.$ap_time;  
            }
            
            //solo landing page de cotizador
            if( isset($unit_id) ){

                $unit = Unit::find($unit_id);
                $plan = PaymentPlan::find($plan_id);

                $msg->unit = $unit;
                $msg->plan = $plan;

                $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
                ->loadView( 'pdf.payment_plan', [
                    'unit' => $unit,
                    'plan' => $plan,
                ]);

                $type = 'El cliente descargó una cotización de la unidad '.$unit->name.' y el plan de pago '.$plan->name;  
            }

            
            //Envíamos webhook
            $webhookUrl = 'https://hooks.zapier.com/hooks/catch/4710110/3fvqx5c/';

            // Datos que deseas enviar en el cuerpo de la solicitud
            $data = [
                'name' => $msg->name,
                'email' => $msg->email,
                'phone' => $msg->phone,
                'url' => $msg->url,
                'content' => $msg->content,
                'type'  => $type,
                'created_at' => $msg->created_at,
            ];

            // Enviar la solicitud POST al webhook
            $response = Http::post($webhookUrl, $data);


            $email = Mail::to('info@domusvallarta.com')->bcc('ventas@punto401.com');
            //$email->cc(['info@theonebucerias.mx', 'theoneresidences@outlook.com']);
        
            //$email = Mail::to('erick@punto401.com');
            
            $email->send(new NewLead($msg));

            if( isset($pdf) ){
                return $pdf->stream();
            }
            
            return redirect()->back()->with('contact_message', 'Gracias, su mensaje ha sido enviado');
        }    
    }

    public function politics(){
        return view('privacy-policy');
    }

    //landing pages
    public function general(){
        $studios = Unit::where('bedrooms', 0)->get();
        $one_bedrooms = Unit::where('bedrooms', 1)->get();
        $two_bedrooms = Unit::where('bedrooms', 2)->limit(6)->get();
        $three_bedrooms = Unit::where('bedrooms', 3)->get();

        return view('landing-pages.general', compact('studios', 'one_bedrooms', 'two_bedrooms', 'three_bedrooms') );
    }

    public function appointment(){
        return view('landing-pages.appointment');
    }

    public function quoter(){
        $units = Unit::where('status', 'Disponible')->orderBy('price')->get();
        $plans = PaymentPlan::all();

        return view('landing-pages.quoter', compact('units', 'plans') );
    }
}
