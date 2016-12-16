<?php

namespace App\Http\Controllers;
use App\Guitar;

//Controllerを継承してHelloControllerをつくる
class HelloController extends Controller{
  public function index(){
    $guitar = Guitar::getInstance();
    //$guitar->play();
    return view('hello.index');
  }
}
