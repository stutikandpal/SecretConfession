<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Message extends Controller
{
    //
    function confess(){
        return view('Confess');
    }

    function postconfess(Request $request){
        $name = $request->input('name');
        $msg = $request->input('msg');
        DB::table('message')
        ->insert(['msg'=>$msg , 'name'=>$name]);
        return redirect('/')->with('message', 'Your Message is successfully recorded! Feeling good?');
    }

    function feel(){
        $confessions = DB::table('message')->get();
        return view('Feel')->with('confessions', $confessions);
    }
}
