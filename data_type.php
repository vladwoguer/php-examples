<!DOCTYPE html>
<html>
<body>

<?php  
$x = 5985;
$y = 59.85;
$z = "teste";
$w = true;
$arr = array("Vladwoguer", "Bezerra");
class Person {
  function Person($name) {
    $this->name=$name;
  }
}

$vlad = new Person($arr[0]);

var_dump($x);
var_dump($y);
var_dump($z);
var_dump($w);
var_dump($arr);
var_dump($vlad);

$vlad = null;

?>  

</body>
</html>
