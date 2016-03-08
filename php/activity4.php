<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 08/03/2016
 * Time: 10:25
 */

$myArray = array("specs", "mugs", "sausage rolls");

echo "<h1>Original Array</h1>";
printmyArray($myArray);

$myArray[1] = "hugs"; // modifies position 1 (re)

echo "<h1>Swap in Hugs</h1>";
printmyArray($myArray);

unset($myArray[2]); // removes the array in position 2

echo "<h1>Take out Sausage Rolls</h1>";
printmyArray($myArray);



//I've made a function to print out the array instead of writing the same code repeatedly above.
function printmyArray($myArray)
{
    foreach($myArray as $x) {
        echo "<p>" . $x . "</p>";
    }
}
?>