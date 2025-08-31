<?php
// echo "Welcome to the Backend Practice Page!";
// echo ("This is a simple PHP script.");
// echo "<h1>This is a heading</h1>";
// $a = print ("This is printed using the print statement.");
// echo $a;

//String,Integer,Float(Double),Boolean,Array,Object,NULL,Resource

// $x = 5;
// $y = 10;
// $z = $x + $y;
// echo "The sum of $x and $y is $z.";
// var_dump($z);


// $str = "Hello World";
// echo "<br/>";
// echo strlen($str);
// echo "<br/>";
// echo str_word_count($str);
// echo "<br/>";
// echo strtoupper($str);
// echo "<br/>";
// echo strtolower($str);
// echo "<br/>";
// echo str_replace("World", "PHP", $str);
// echo "<br/>";
// $trim_str = trim($str);
// echo $trim_str;
// echo "<br/>";
// echo strlen($trim_str);
// echo "<br/>";
// echo strrev($str);
// echo "<br/>";


// $words = explode(" ", $str);
// echo "<pre>";
// print_r($words);
// echo "</pre>";

// echo "<br/>";
// echo implode(" ", $words);

// echo "<br/>";
// $x = "Hello";
// $y = "World";

// echo "$x $y";
// echo "<br/>";

// $z = $x . " " . $y;
// echo $z;

// class stu{
//     public function add($a, $b) {
//         return $a + $b;
//     }
// }
// $x = new stu();
// echo $x->add(5, 10);
// x->add();

// echo "<br/>";

// echo substr($str, 2);
// echo substr($str, 2, 3);

// $z = "Hello, \"Sam\" how are you?";
// echo $z;
// echo "<br/>";
// echo 2 ** 3;
// echo "<br/>";
// $c = 5 > 2 ? "true" : "false";
// echo $c;
// echo "<br/>";
// $s = NULL;
// $d = $s ?? 5;
// echo $d;



// function add($a, $b)
// {
//     return $a + $b;
// }

// $c = add(5, 10);
// echo $c;

//indexed, associative arrays
// $indexedArray = array(1, 2, 3, 4, 5);
//$indexedArray[1];
// $associativeArray = array("first" => 1, "second" => 2, "third" => 3);
//$associativeArray["second"];

// $x = 5;//$GLOBALS['x']=5;
// $y = 6;//$GLOBALS['y']=6;

// function add()
// {
//     global $x, $y; // Accessing global variables
//     // $z = $GLOBALS['x'] + $GLOBALS['y'];
//     $z = $x + $y;
//     return $z;
// }

// $c = add();
// echo $c;

//Array
//1.Indexed Array,Associative Array,Multidimensional Array

//Indexed Array
// $cars = array("volvo", "BMW", "Toyota");

// echo $cars[1];
// print_r($cars);

// for ($i = 0; $i < count($cars); $i++) {
//     echo $cars[$i];
// }

// $i = 0;
// while ($i < count($cars)) {
//     echo $cars[$i];
//     $i++;
// }

// $i = 0;
// do {
//     echo $cars[$i];
//     $i++;
// } while ($i < count($cars));

// array_push($cars, "Mercedes");

// foreach ($cars as $car) {
//     echo $car;
//     echo "<br/>";
// }

//Associative Array

// $car = array("volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");

// echo $car["BMW"];

// $user = array("name" => "John", "age" => 30, "email" => "john@example.com");
// $user["age"] = 31;
// echo "<pre>";
// print_r($user);
// echo "</pre>";

// foreach ($user as $key => $value) {
//     echo "$key: $value";
//     echo "<br/>";
// }

// $cars = ["volvo", "BMW", "Toyota"];
// $user = [
//     "name" => "John",
//     "age" => 30,
//     "email" => "john@example.com"
// ];

//Multidimentional Array

// $arr = array(0 => array(1, 2, 3), 1 => array(4, 5, 6), 2 => array(7, 8, 9));
// echo $arr[0][1];

// $arr = array("0" => array(1, 2, 3), "1" => array(4, 5, 6), "2" => array(7, 8, 9));
// echo $arr["0"][1];

// $cars = [
//     "volvo" => ["model" => "XC90", "year" => 2020],
//     "BMW" => ["model" => "X5", "year" => 2021],
//     "Toyota" => ["model" => "Highlander", "year" => 2019]
// ];



// echo $cars["Toyota"]["year"];

// $numbers = array(5, 4, 10, 0, -8);
// sort($numbers);
// rsort($numbers);
// print_r($numbers);


// $age = array("Peter" => 35, "John" => 40, "Mary" => 30);
// asort($age);
// arsort($age);

// ksort($age);
// krsort($age);
// print_r($age);


$arr = array(1, 2, 3, 4, 5);
// function test($v)
// {
//     return $v > 2;
// }
// $arr = array_filter($arr, "test");
// $arr = array_filter($arr, fn($x) => $x > 2);
// $arr = array_map(fn($x) => $x * 2, $arr);
// print_r($arr);

// arr.map(x=>x*2);//JS

// echo $_SERVER["PHP_SELF"];
// echo $_SERVER["SERVER_NAME"];
// echo $_SERVER["HTTP_HOST"];
// echo $_SERVER["HTTP_USER_AGENT"];
// echo $_SERVER["SCRIPT_NAME"];
// echo $_SERVER["HTTP_REFERER"];
// echo $_SERVER["REQUEST_METHOD"];
// echo $_SERVER["QUERY_STRING"];
// echo $_SERVER["REMOTE_ADDR"];
// echo $_SERVER["SERVER_PORT"];
// echo $_SERVER["SERVER_PROTOCOL"];
// echo $_SERVER["REMOTE_PORT"];

// echo  $_REQUEST;
// echo  $_GET;
// echo $_POST;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "Hello, " . htmlspecialchars($name);
}

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    echo "Hello, " . htmlspecialchars($name);
}