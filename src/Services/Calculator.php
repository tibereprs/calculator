<?php

namespace App\Services;


class Calculator
{
    public function calculate($resultCalculatorForm)
    {
        $operator = $resultCalculatorForm['operator'];
        $number1 = $resultCalculatorForm['number1'];
        $number2 = $resultCalculatorForm['number2'];

        switch ($operator) {
            case 'plus':
                $result = $this->plus($number1, $number2);
                break;
            case 'minus':
                $result = $this->minus($number1, $number2);
                break;
            case 'multiplication':
                $result = $this->multiplication($number1, $number2);
                break;
            case 'division':
                $result = $this->division($number1, $number2);
                break;
            default:
                $result = false;
                break;
        }

        return $result;
    }

    private function plus($number1, $number2)
    {
        $result = $number1 + $number2;

        return $result;
    }

    private function minus($number1, $number2)
    {
        $result = $number1 - $number2;

        return $result;
    }

    private function multiplication($number1, $number2)
    {
        $result = $number1 * $number2;

        return $result;
    }

    private function division($number1, $number2)
    {
        $result = $number1 / $number2;

        return $result;
    }
}