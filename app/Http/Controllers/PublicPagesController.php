<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\View;
use App\Mail\NewLead;
use App\Models\Message;
use App\Models\PaymentPlan;
use Illuminate\Http\Request;
use App\Models\ConstructionUpdate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Spatie\Honeypot\ProtectAgainstSpam;


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
        $updates = ConstructionUpdate::all();

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

            
            $email = Mail::to('info@domusvallarta.com');
            //$email->cc(['info@theonebucerias.mx', 'theoneresidences@outlook.com']);
            $email->bcc(['erick@punto401.com','javier@punto401.com']);

            /* $email = Mail::to('erick@punto401.com');*/
            
            $email->send(new NewLead($msg)); 
            
            return redirect()->back()->with('contact_message', 'Gracias, su mensaje ha sido enviado');
        }    
    }

    public function politics(){
        return view('privacy-policy');
    }
}
