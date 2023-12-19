<?php
// Printing statements

// echo "hello world" . " another statement";
// echo '<br>';

// /* variables in php

// -> user defined variables
// -> predefined vaiables

// Datatypes:

// string
// null
// int
// boolean
// float
// array
// object


// */

// // -> user defined variables

// $name = "ebad";     // string
// $number = 3;        // integer
// $null = null;       // null 
// $bool = true;       // boolean
// $float = 3.4;       // float


// echo strlen($name);
// echo "<br>";
// echo rand(0 , 1000);
// echo "<br>";

// // variable naming rules

// // right way to define the variable
// $FirstName; // PascalCase
// $firstName; // camelCase
// $firstName; // camelCase
// $_name;
// $name21;
// $last_name;
// $lastname_;
// // wrong way to declare the variable

// // $last%name;
// // $last-name;
// // $%name;
// // $123;
// // $2name;


// var_dump($name);
// // echo '<br>';
// // var_dump($number);
// // echo '<br>';
// // var_dump($null);
// // echo '<br>';
// // var_dump($bool);
// // echo '<br>';
// // var_dump($float);

// // // function function_name(){
// // // Statement
// // // }

// // function Msg(){
// //     $msg =  "function body";
// //     echo $msg;
// // }
// // Msg();

// $num1 = 3;
// function addition(){
//     global $num1;
//     $num2 = 6;
//     return $num1 + $num2;

// }
// echo addition();

// phpinfo();


// conditional statements in php

// $person = "Pakistani";
// $age = 20;

// $vote = $person == "Pakistani" && $age >= 18?"your are eligible for vote":"not eligible";
// echo $vote;



// if($person == "Pakistani" && $age >= 18){
// echo "you are eligible for vote";
// }else{
//     echo "not eligible better luck next time";
// }

// Indexed Array
// first method


// $fruits = array("apple", "banana", "orange", "mango");
// echo '<pre>';
// print_r($fruits);
// echo '</pre>';

// // 2nd Method

// $vegies = ["Potato", "onion", "Tomato"];
// echo '<pre>';
// print_r($vegies);
// echo '</pre>';


// // 3rd method

// $names[0] = "ali";
// $names[1] = "ahmed";
// $names[2] = "Yaqoob al kindi";
// echo '<pre>';
// print_r($names);
// echo '</pre>';


// // Associative Array

// $subjects = array("Maths" => 44, "English" => 11, "urdu" => 100);
// echo '<pre>';
// print_r($subjects);
// echo '</pre>';
// echo $subjects["Maths"];
// echo '<br>';
// echo $subjects["urdu"];



// Multiple dimensional indexed array

// $marks = [
//     [1, 2, 3, 4, 5],    // 0
//     [7, 8, 9, 6, 5],    // 1
//     ['a', 'e', 'i', 'o', 'u', 'z', 't'],
//     ["ali", "ahmed", "mubbeen", "zaid", "hassan"]
// ];


// for ($i = 0; $i < count($marks); $i++) {  // outer loop
//     echo '<h3>Array-' . $i . '</h3>';
//     for ($j = 0; $j < count($marks[$i]); $j++) {  //inner loop
//         echo $marks[$i][$j] . "<br>";
//     }
// }


        // $num = [1,2,3,4,5];

// // echo $length;

// for($i = 0; $i < count($num); $i++){
//     echo "$num[$i]<br>";

// }

// echo $marks[0];
// print_r($marks);

// Multi-dimensional associative array

$students = [
    "zaid" => ["maths" => 33, "English" => 55, "Udru" => 88],
    "Ali" => ["maths" => 100, "English" => 33, "Udru" => 68],
    "Ebad" => ["maths" => 10000000, "English" => 1000000, "Udru" => 10000],
    "Shaheer" => ["maths" => 0.1, "English" => 0.9, "Udru" => 0.025],
];


foreach($students as $k => $v){
    echo "<h4>$k</h4>";
    foreach($v as $key => $value){
        echo "$key = $value <br>";
    }
}





// $markss = ["maths" => 33, "English" => 55, "Udru" => 88];
// foreach ($markss as $k => $v) {
//     echo "$k <b> belongs to </b> $v" . "<br>";
// }











