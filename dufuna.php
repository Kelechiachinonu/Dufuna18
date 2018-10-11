<?php
//php comments are here
//QUIZ 1
echo "<br><br><br>";
echo "My name is Kelechi " . " Achinonu";
echo "<br><br>";
print "I love software programming!";
echo nl2br ("\r\n It is exciting \r\n and a lot of fun too!  I loooooove it\n");

//QUIZ 2
echo "<br><br><br>";
$a = 10;
$b = 20;
$c = 30;

$x = $a*$c. "<br><br>";
$y = $b-$a. "<br><br>";
$z = $c/$a. "<br><br>";

echo "The product of A AND B IS ".  $x; "<br><br>";
echo "The subtraction of A FROM B IS ". $y; "<br><br>";
echo "The division of C AND A IS ". $z; "<br><br>";

//QUIZ 3
 echo "<br><br>";
 $t = "temperature";
 $t = 45;

 if ($t <= 20)   {
 	echo "It is really cold today!";
 }

elseif ($t > 20 && $t < 30) {
	echo "The weather is just perfect!";
}

 elseif ($t >= 30 && $t < 40) {
 	echo "It is so hot today!";
 }

 else {
 	print "Am I in the Sahara Desert?!";
 }

//QUIZ 4
 echo "<br><br>";
 $x = 100;
 while ($x <= 150) {
 	echo "The number is: $x <br>";

 	$x++;
 }

 echo "<br><br><br>";
 for ($x = 0; $x <= 50; $x++)
 if ($x%2==0)
 {
 	echo "The even number is: $x <br>";

 }
 
 
//QUIZ 5
echo "<br><br><br>";

$name = array ("Joy", "Kelechi", "Kayode", "Lade", "Gladys");

$hobbies = array ('Coding', 'Eating', 'Swimming', 'Cooking', 'Writing');

 foreach (array_combine($name, $hobbies) as $name => $hobbies) {
 	echo "My name is " .  $name. ". I love ". $hobbies. " . ";

	echo "<br><br>";
 }


//QUIZ 6
echo "<br><br><br>";
function numbers($num1, $num2) {
	$sum = $num1 + $num2;
	$product = $num1 * $num2;
	echo "The sum of " .  $num1  . " and "  . $num2 . " is : " . $sum; 
	echo "<br>";
	echo "The product of " .  $num1 . " and "  . $num2 .  " is : " . $product; 
}

numbers(20, 30);


?>