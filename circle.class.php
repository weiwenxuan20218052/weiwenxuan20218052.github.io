<?php
class Circle extends Shape {
    private $radius=0;

    function __construct(){
        $this->shapeName="Circle ";

        if($this->validate($_POST['radius'], 'εηεεΎ')){
            $this->radius=$_POST["radius"];
        }else{
            exit;
        }
    }

    function area(){
        return pi()*$this->radius*$this->radius;
    }

    function perimeter(){
        return 2*pi()*$this->radius;
    }
}

