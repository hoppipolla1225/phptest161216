<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Users;

class UsersController extends Controller
{
    public function index(){
      return "aaa";
    }
    public function show(){
    }
    public function create(){
    }
    public function update(){
    }
    public function destroy(){
    }

}

public function additional($i, $j){
  if(!is_int($i)||!is_int($j)) return;
  if(!is_float($i)||!is_float($j)) return;
  if($i > 999||$j > 999) return;
  if($i < -999||$j < -999) return;
  $result = $i + $j;
  if($result == 777) return "Happy";
  if($result > 1998) return;
  if($result < -1998) return;
  return $result;
}
