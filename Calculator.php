<?php
class Calculator
{
    protected $history;
    protected $result;
    public function __construct()
    {
        $this->history=array();
    }


    public function add($num1, $num2)
    {
        $this->result = $num1+$num2;
        array_push($this->history, 'added '.$num1. ' to '.$num2.' got '.$this->result);
        return $this->result;
    }


    public function multiply($num1, $num2)
    {
        $this->result = $num1*$num2;
        array_push($this->history, 'multiplied  '.$num1. ' with '.$num2.' got '.$this->result);
        return $this->result;
    }

    public function subtract($num1, $num2)
    {
        $this->result = $num1-$num2;
        array_push($this->history, 'subtracted  '.$num1. ' with '.$num2.' got '.$this->result);
        return $this->result;
    }

    public function divide($num1, $num2)
    {
        $this->result = $num1/$num2;
        array_push($this->history, 'divided '.$num1. ' with '.$num2.' got '.$this->result);
        return $this->result;
    }

    public function printOperations()
    {
        return $this->history;
    }

    public function clearOperations()
    {
        $this->history=array();
    }
}
?>