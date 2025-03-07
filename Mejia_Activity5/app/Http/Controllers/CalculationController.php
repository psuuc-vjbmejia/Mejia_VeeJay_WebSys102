<?php
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use Illuminate\Routing\Controller;

 class CalculationController extends Controller

{
    
    public function compute($operator1,$value1,$value2,$operator2,$value3,$value4)
{

    echo "<h1>Vee Jay Mejia</h1>";
    echo "<h2>BSIT-3B</h2>";

    //chinecheck if odd or even ang input
    if($value1 % 2 == 0){
        echo "<h2>Value 1: <span style='color: blue;'>$value1</span></h2>";
    }
    else{
        echo "<h2>Value 1: <span style='color: orange;'>$value1</span></h2>";
    }
    if($value2 % 2 == 0){
        echo "<h2>Value 2: <span style='color: blue;'>$value2</span></h2>";
    }
    else{
        echo "<h2>Value 2: <span style='color: orange;'>$value2</span></h2>";
    }
    echo "<h2>Operator : $operator1</h2>";
 

    //cincompute ang mga values 1 at 2  
    $result1 = $this->calculate($value1, $value2,$operator1);
    if($result1 == 'error'){
        echo "<h2 style='color: red'>Error!</h2>";
    }
    else{
        //ina-output ang result 
        $color1 = ($result1 % 2 ==0)?'green' : 'blue';
        echo "<div style='background-color: $color1; padding:10px; width: 150px;color: white;border: solid black 3px;text-align: center'>";
        echo "<h2>Result : $result1</h2>";
        echo "</div>";
    }

        //chinecheck if odd or even ang input
    if($value3 % 2 == 0){
        echo "<h2>Value 3: <span style='color: blue;'>$value3</span></h2>";
    }
    else{
        echo "<h2>Value 3: <span style='color: orange;'>$value3</span></h2>";
    }   

    if($value4 % 2 == 0){
        echo "<h2>Value 4: <span style='color: blue;'>$value4</span></h2>";
    }
    else{
        echo "<h2>Value 4: <span style='color: orange;'>$value4</span></h2>";
    }
    echo "<h2>Operator : $operator2</h2>";

    //cincompute ang mga values 3 at 5
    $result2 = $this->calculate2($value3, $value4,$operator2);
    if($result2 == 'error'){
        echo "<h2 style='color: red'>Error!</h2>";
    }
    else{
        $color2 = ($result2 % 2 ==0)?'green' : 'blue';
        echo "<div style='background-color: $color2; padding:10px; width: 150px;color: white;border: solid black 3px;text-align: center'>";
        echo "<h2>Result : $result2</h2>";
        echo "</div>";
    }
}

//function sa pag compute depending sa kung anong operator ang ininput para sa unang 2 value
private function calculate($value1,$value2,$operator1)
 {
    switch($operator1){
        case 'add': 
            return $value1 + $value2;
        case 'subtract': 
            return $value1 - $value2;    
        case 'multiply': 
            return $value1 * $value2;   
        case 'divide': 
            if($value2 == 0){
                return 'error'; //mag eerror kung may 0
        }       
            return $value1 / $value2;
        default:
            return 'error';//error kung hindi alam ang operator
    }
 }
//function sa pag compute depending sa kung anong operator ang ininput para sa huling 2 value

 private function calculate2($value3,$value4,$operator2)
 {
    switch($operator2){
        case 'add': 
            return $value3 + $value4;
        case 'subtract': 
            return $value3 - $value4;    
        case 'multiply': 
            return $value3 * $value4;   
        case 'divide': 
            if($value4 == 0){
                return 'error';
            }       
            return $value3 / $value4;
        default:
            return 'error';
    }
 }
}