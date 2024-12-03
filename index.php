<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa de casa</title>
</head>
<body>
    <!--PHP SYNTAX-->
<h1>My first PHP page</h1>
<?php
echo "Hello World!";
?>
<br>
    <!--PHP COMMENTS-->
<?php
// Outputs a welcome message:
echo "Welcome Home!";
?>
<br>
    <!--PHP VARIABLES-->
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>
<br>
    <!--PHP ECHO/PRINT-->
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
<br>
    <!--PHP DATA TYPES-->
<?php
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
?>
<br>
    <!--PHP STRINGS-->
<?php
$x = "John";
echo "Hello $x";
?>
<br>
    <!--PHP NUMBERS-->
<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);
?>
<br>
    <!--PHP CASTING-->
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
<br>
    <!--PHP MATH-->
<?php
echo(sqrt(64));
?>
<br>
    <!--PHP CONSTANTS-->
<?php
const MYCAR = "Volvo";
echo MYCAR;
?>
<br>
    <!--PHP Magic Constants-->
<?php
function myValue(){
    return __FUNCTION__;
  }
  echo myValue();
?>
<br>
  <!--PHP Operators--> 
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>
<br>
    <!--PHP if Statements--> 
<?php
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}
?>
<br>
    <!--PHP SWICH-->
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
<br>
    <!--PHP Loops-->
<?php
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
?>
<br>
    <!--PHP Functions--> 
<?php
function myMessage() {
    echo "Hello world!";
  }
  
  myMessage();
?>
<br>
  <!--PHP Arrays--> 
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
</body>
</html>