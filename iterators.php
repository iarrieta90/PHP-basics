<?php

//Generate a snippet that makes use of for
for ($i=1; $i<5; $i++) {
    echo "<p>For loop iteration $i<p>";
}
echo "<br>";

//Generate a snippet that makes use of foreach
$array = array(1,2,3,4);
foreach($array as $number){
    echo "<p>foreach iteration $number</p>";
}
echo "<br>";

//Generate a snippet that uses while
$x = 1;
while($x <5) {
    echo "<p>While loop iteration $x</p>";
    $x++;
}
echo "<br>";

//Generate a snippet that uses do while
$x = 1;
do {
    echo "<p>Do while loop iteration $x</p>";
    $x++;
} while ($x < 5);

?>