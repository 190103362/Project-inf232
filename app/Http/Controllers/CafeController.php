<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function index(){
        return view('cafe');
    }
    public function store(Request $request){
        $form = new Cafe();
        $form-> name = $request-> input('name');
        $form-> email = $request-> input('email');
        $form-> yourproblem = $request-> input('yourproblem');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/form/', $filename);
            $form->image = $filename;
        } else{
            return $request;
            $form->image = '';
        }
        $form->save();
        return view('cafe')->with('cafe',$form);
    }
}