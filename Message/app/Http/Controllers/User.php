<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function users(){
        return ['user'=>'Stuti'];
    }

    function message($name){
        echo "<h1>Hello ".$name."</h1>" ;
    }
}
