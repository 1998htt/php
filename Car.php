<?php
/**
 * Created by PhpStorm.
 * User: de
 * Date: 2018/10/13
 * Time: 15:11
 */

class Car
{
    var $color;
    function Car($color="green"){
        $this->color=$color;
    }
    function what_color(){
        return $this->color;
    }
}
$c = new Car();
$c1 = new Car("red");
echo $c->what_color();
echo $c1->what_color();