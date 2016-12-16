<?php

namespace App\Http\Controllers;
use App\Guitar;

//Controllerを継承してHelloControllerをつくる
class HelloController extends Controller {
	public function index(){
		return view('hello.index');
	}
	public function guitar($serialnum) {
		$guitar = Guitar::getInstance($serialnum);
		echo $guitar->getCurrentTime().PHP_EOL;
		$guitar = Guitar::getInstance($serialnum);
		echo $guitar->getCurrentTime().PHP_EOL;
		return;
	}
	public function sum($num1, $num2)
	{
		// 値のチェック
		// 整数か?
		if (!is_int($num1) || !is_int($num2)) {
			return;
		}
		// 引数の上限や下限を超えていないか?
		if ($num1 < -999 || $num1 > 999 || $num2 < -999 || $num2 > 999) {
			return;
		}
		$return_num = $num1 + $num2;
		// 返り値のチェック
		if ($return_num < -1998 || $return_num > 1998) {
			return;
		} else if ($return_num == 777) {
			return 'Happy';
		} else {
			return $return_num;
		}
	}
}
?>
