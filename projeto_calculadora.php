<?php
    /*function Calculadora($number1 , $aritimetica, $number2){

        switch($aritimetica) {
            
            case "+":
                echo $number1 + $number2;
                break;

            case "-";
                echo $number1 - $number2;
                break;    
                
            
            case "*";
                echo $number1 * $number2;
                break;
   
            
            case "/";
                echo $number1 / $number2;
                break;    

            case "%";
                echo $number1 % $number2;
                break;    
        }

    }
    Calculadora("80", "*", "10");*/


    $number1 = 10;
    $number2 = 10;
    $calculo = "+";

    switch($calculo) {
        case "+":
            echo $number1 + $number2;
            break;
        
        case "-";
            echo $number1 - $number2;
            break;
        
        case "*";
            echo $number * $number2;
            break; 

        case "/";
            echo $number / $number2;
            break;
        
        case "%";
            echo $number1 % $number3;
            break;
            
        default;
            echo "Por favor ensira a operação desejada";
            break;
    }
    
?>