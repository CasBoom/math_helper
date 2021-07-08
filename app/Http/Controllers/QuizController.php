<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    function create(){
        $id = "";
        return redirect("/quiz/$id/1");
    }

    function check(){

    }
}
