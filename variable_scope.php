<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope
 
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

function myTest2() {
  $y = 5; // local scope
  echo "<p>Variable y inside function is: $y</p>";
} 
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $y</p>";

function myTest3() {
  global $x;
  echo $x;
}

myTest3();

function myTest4() {
  //static varibles are not deleted after the fuctions ends
  static $z = 0;
  echo $z."\n";
  $z++;
}

myTest4();
myTest4();
myTest4();


?>

</body>
</html>
