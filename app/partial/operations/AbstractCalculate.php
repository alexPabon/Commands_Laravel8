<?php


namespace App\partial\operations;


Abstract class AbstractCalculate
{
    protected $num1, $num2, $start;

    public function __construct($num1,$num2,$start)
    {
        $this->num1=$num1;
        $this->num2=$num2;
        $this->start=$start;
    }
}
