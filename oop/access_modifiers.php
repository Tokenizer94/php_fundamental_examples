<?php
class Fruit
{
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit("M", "Y");
$mango->name = 'Mango'; // OK
//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR
echo $mango->name;
