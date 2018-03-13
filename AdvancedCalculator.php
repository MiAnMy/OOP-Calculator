<?php
Class AdvancedCalculator extends Calculator
{
    const pi = 3.14;

    public function pow($num1, $num2)
    {
        $this->result = pow($num1,$num2);
        array_push($this->history, $num1. ' ^ '.$num2.' equals '.$this->result);
        return $this->result;
    }

    public function root($num1, $num2)
    {
        $this->result = pow($num1,1/$num2);
        array_push($this->history, 'root '.$num2. ' of '.$num1.' equals '.$this->result);
        return $this->result;
    }

    public function computeCircleRadius($r)
    {
        $this->result = self::pi*pow($r,2);
        array_push($this->history, 'pole '.$r. ' of '.$this->result);
        return $this->result;
    }
}
?>