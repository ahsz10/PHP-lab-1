<?php
echo "Task 2 <br>";
define("Name", "Ahmed Samy Zaghloul");
echo Name;

echo "<br><br>Task 3 <br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";

echo "Task 4 <br>";
// For Loop
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}
echo "For Loop <br>";
echo "a= $a  and b= $b";

// While loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}

echo "<br><br>While Loop <br>";
echo "i= $i  and num= $num";

// Do While loop
$x = 0;
$num = 0;
    
do {
$x++;
}

while( $x < 10 );

echo "<br><br>Do While Loop <br>";
echo "x= $x";

// For Each
echo "<br><br>For Each Loop <br>";
$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}

// Break
$z = 0;
         
while( $z < 10) {
$z++;
if( $z == 3 )break;
}
echo "<br><br>Break in Loop <br>";
echo "z= $z";

// Continue
$array = array( 1, 2, 3, 4, 5); 
echo "<br><br>Continue in Loop <br>";
foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}

// Switch
echo "<br><br> Switch Case <br>";

$age = 13;

switch ($age>0) {
  case ($age < 5):
    echo "Stay at home";
    break;
  case ($age == 5):
    echo "Go to Kindergarden";
    break;
  case ($age <= 12):
    echo "Go to grade : 6";
    break;
  default:
    echo "Age is greater than 12 ";
}
?> 