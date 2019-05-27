<?php

namespace App\Http\Controllers;
use DB;
use Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller
{
    public function welcome() {

        return view('welcome');
    }
}