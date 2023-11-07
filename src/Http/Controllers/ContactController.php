<?php

namespace Alice\Config\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ContactController extends Controller
{
    //
    public function index(){
        // return view('contact::contact');
        return "hello qadir";
    }

    public function send(Request $request){
        return $request->all();
    }
}
