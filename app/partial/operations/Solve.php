<?php


namespace App\partial\operations;


use App\Models\Calculation;
use App\partial\Operar;
use Carbon\Carbon;

class Solve extends AbstractCalculate implements InterfaceOperations
{

    public function add():int
    {
        $add = $this->num1+$this->num2;

        $this->save_result($add,'+');

        return $add;
    }

    public function subtract():int
    {
        $subtract = $this->num1-$this->num2;

        $this->save_result($subtract,'-');

        return $subtract;
    }

    public function divide():float
    {
        $divide = $this->num1/$this->num2;

        $this->save_result($divide,'/');

        return$divide;
    }

    public function multiply():float
    {
        $multiply = $this->num1*$this->num2;

        $this->save_result($multiply,'*');

        return $multiply;
    }

    public function execute():\stdClass{
        $add = $this->add();
        $subtract = $this->subtract();
        $divide = $this->divide();
        $multiply = $this->multiply();

        return (object) [
           'add'=> $add,
            'subtract'=>$subtract,
            'divide'=>$divide,
            'multiply'=>$multiply
        ];
    }

    public function save_result($result, string $operation){

        $date = Carbon::now();

        $register = new Calculation();

        $register->create([
            'numero1'=>$this->num1,
            'numero2'=>$this->num2,
            'operacion'=>$operation,
            'resultado'=>json_encode($result),
            'inicio'=>$this->start,
            'fin'=>$date,
        ]);
    }
}
