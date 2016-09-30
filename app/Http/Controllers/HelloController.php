<?php

namespace App\Http\Controllers;

//Controllerを継承してHelloControllerをつくる
class HelloController extends Controller{
    public function index(){
        return view('hello.index');
    }
}
