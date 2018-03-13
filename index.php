<?php
    include 'Calculator.php';
    include 'AdvancedCalculator.php';

    $calc1 = new Calculator;
    $calc1 ->add(3,4);
    $calc1 ->add(2,1);
    $calc1 ->multiply(3,4);
    $calc1 ->multiply(2,1);
    $calc1 ->subtract(3,4);
    $calc1 ->subtract(2,1);
    $calc1 ->divide(3,4);
    $calc1 ->divide(2,1);

    $calca = new AdvancedCalculator;
    $calca ->pow(3,4);
    $calca ->pow(2,1);
    $calca ->root(2,4);
    $calca ->root(2,1);
    $calca ->computeCircleRadius(2);





    $history = $calc1->printOperations();
    foreach ($history as &$value) {
        echo '<p>'.$value.'</p>';
    }

    $calc1->clearOperations();


    $history = $calc1->printOperations();
    foreach ($history as &$value) {
        echo '<p>'.$value.'</p>';
    }

    $history = $calca->printOperations();
    foreach ($history as &$value) {
        echo '<p>'.$value.'</p>';
    }
?>