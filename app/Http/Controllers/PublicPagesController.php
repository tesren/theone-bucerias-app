<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\View;
use App\Models\Message;
use Illuminate\Http\Request;
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

        return view('unit', compact('unit'));
    }

    public function contact($id){
        return view('contact');
    }

    public function sendMail($id){

        $validator = Validator::make( $request->all(), [
            'name'       => 'required|string|min:1|max:255',
            'email'      => 'required|email|string|max:255',
            'messsage'    => 'nullable|string|max:500',
            'g-recaptcha-response' => 'recaptcha|required',
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

            
            $email = Mail::to('info@theonebucerias.mx');

            $email->bcc(['erick@punto401.com','javier@punto401.com']);
            
            $email->send(new NewLead($msg));
            

            return redirect()->back()->with('message', 'Gracias, su mensaje ha sido enviado');
        }    
    }
}
