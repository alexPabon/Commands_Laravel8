<?php


namespace App\partial\operations;


class Advanced_operations extends Solve
{

    public function operations_basic():\stdClass{

        return $this->execute();

    }

    public function hypotenuse():\stdClass{

        $hypotenuse = round(sqrt(pow($this->num1,2)+pow($this->num2,2)),2);

        $this->save_result($hypotenuse,'hypotenuse');

        return (object) ['hypotenuse'=>$hypotenuse];
    }

    public function perimeter(){

        $hypot = $this->hypotenuse();

        $perimeter = $this->add()+$hypot->hypotenuse;
        $this->save_result($perimeter,'perimeter');

        return (object) [
            'lado_1'=>$this->num1,
            'lado_2'=>$this->num2,
            'lado_3'=>$hypot->hypotenuse,
            'perimeter'=> $perimeter
        ];
    }


}
