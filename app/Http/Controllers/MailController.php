<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function index(){
        return view('contact');
    }
    function send(Request $request){
        $this->validate($request,[
            'name'        =>       'required',
            'email'       =>       'required|email',
            'message'     =>       'required',
        ]);

        $demo = array(
            'name'   => $request->name,
            'message'   => $request->message
        );
        Mail::to('190103362@stu.sdu.edu.kz')->send(new MyMail($demo));  //190103326@stu.sdu.edu.kz
        return back()->with('success', 'Thanks for contact us!');
    }
}
