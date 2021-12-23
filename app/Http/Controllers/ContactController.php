<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('components.contact-us');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'comment' => $request->get('message') 
        );

        Mail::to('admin@gmail.com')->send(
            new SendMail($data)
        );

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }
}
