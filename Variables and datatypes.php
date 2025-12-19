<?php
// variable in php
    $string = "any sentence / word" ; // datatype string for normal text
    $integer = 123456789 ; // datatype for non decimal number
    $float = 1.234 ; // datatype float for decimal
    $boolean = true ; // datatype boolean (true or false)

    // output 
    echo "this is a string : $string <br>" ; // output "any sentence / word"
    echo "this is an integer : $integer <br>" ; // output "123456789"
    echo "this is a float : $float <br>" ; // output "1.234
    echo "this os a boolean : $boolean <br><br>" ; //output "1"

// you can also force the variable data type
    $RawInput = "150.55" ; //string

    $ConvertToFloat = (float)$RawInput ; // convert string to float
    $ConvertToInteger = (int)$RawInput ; // convert string to integer
    
    //output
    echo "Before conversion (string) : $RawInput <br>" ; // string
    echo "After conversion (float) : $ConvertToFloat <br>" ; // float
    echo "After conversion (integer) : $ConvertToInteger <br>" ; // integer
?>