<?php

namespace Sinevia\Widgets;

class Cycle2 {
  public $data = null;
  function __construct($data=[]){
    $this->data = $data;
  }
  function display(){
    $html = "";
    $html .= '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>';
    $html .= '<script src="http://malsup.github.com/jquery.cycle2.js"></script>';
    $html .= '<div class="cycle-slideshow">';
    $html .= '  <img src="http://malsup.github.io/images/p1.jpg">';
    $html .= '  <img src="http://malsup.github.io/images/p2.jpg">';
    $html .= '  <img src="http://malsup.github.io/images/p3.jpg">';
    $html .= '  <img src="http://malsup.github.io/images/p4.jpg">';
    $html .= '</div>';
    return $html;
  }
}
