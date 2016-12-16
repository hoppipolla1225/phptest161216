<?php

namespace App;

class Guitar {
  private $name;
  private $type;
  private $color;

  //唯一のインスタンスを保持する変数
  private static $instance;

  //インスタンスを返すためのメソッド
  public static function getInstance(){
    if(!isset(self::$instance)){
      self:: $instance = new Guitar();
      echo 'Guitar instance was created!!';
    }
    return self::$instance;
  }

//  function play() {
//    echo "aaa";
//  }
}
