<p> 1.  Add C Slashes</p>

<?php
echo addcslashes('tiffany', 'A..z);?>

<hr>

<p> 2. Print Function </p>
<?php
print("Hello World");?>

<hr>

<p> 3. Word Wrap</p>

<?php
$text = "What is your name?";
$newtext = wordwrap($text, 5, "<br />\n");

echo $newtext;
?>

<hr>

<p> 4. Make string lowercase </p>
<?php
$str = "WHAT is YOUR name";
$str = strtolower($str);
echo $str;
?>

<hr>

<p> 5. Make string uppercase </p>

<?php
$str = "i like cheese";
$str = strtoupper($str);
echo $str;
?>

<hr>

<p> 6. Return part of a string</p>

<?php
$rest = substr("tiffany", -1);
$rest = substr("tiffany", -2);
$rest = substr("tiffany", -3, 1);
?>

<hr>

<p> 7. Make string's first character uppercase </p>
<?php
$foo = 'how old are you?';
$foo = ucfirst($foo); ?>

<hr>

<p> 8. Unquote string </p>

<?php
$str = "How are you?";
echo stripslashes($str);
?>

<hr>

<p> 9. Search a string for any of a set of characters</p>

<?php

$text = 'What is south of New Jersey?';

echo strpbrk($text, 's');?>

<p> 10. Get string length</p>
<?php
$str = 'how old are you?';
echo strlen($str);?>

<hr>

<p> 11. Return the values from a single column in the input array </p>

<?php
$records = array(
    array(
            'id' => 1234,'first_name' => 'Christian', 'last_name' => 'Yu' ),
 array(
	  'id' => 7684,'first_name' => 'John', 'last_name' => 'Smith' ),

array(
            'id' => 2564,'first_name' => 'Angelinan', 'last_name' => 'Jolie' ),


	  $first_names = array_column($records, 'first_name');
	  print_r($first_names);
	  ?>
<hr>

<p> 12. Counts all the values of an array </p>

<?php
$array = array(5, 6, "Tiffany", 5, 5, 5, 6, "Tiffany");
print_r(array_count_values($array));
?>

<hr>

<p> 13. Computes the difference of arrays </p>

<?php
$array1 = array("a" => "apples", "oranges", "bananas", "pears", "plums",
"peach");

$array2 = array("b" => "oranges", "pears", "plums");
$result = array_diff($array1, $array2);

print_r($result);
?>

<hr>

<p> 14. Return current element in an array </p>

<?php
$makeupbrands = array('NYX', 'MAC', 'ELF', 'Sephora');
$mode = current($makeupbrands);
$mode = next($makeupbrands);   
$mode = current($makeupbrands);
$mode = prev($makeupbrands); 
$mode = end($makeupbrands);     
$mode = current($makeupbrands); 
$arr = array();
var_dump(current($arr));
$arr = array(array());
var_dump(current($arr));
?>

<hr>

<p> 15. Fetch a key from an array </p>

<?php
$array = array(
    'makeup1' => 'primer',
        'makeup2' => 'foundation',
	    'makeup3' => 'mascara',
	        'makeup4' => 'eyeliner',
		    'makeup5' => 'eyeliner');

		    while ($fruit_name = current($array)) {
		        if ($fruit_name == 'eyeliner') {
			        echo key($array).'eyeliner>';
				    }
				        next($array);
					}
					?>


<hr>
<p> 16. Sort an array by key in reverse order </p>

<?php
$makeup  = array("d"=>"eyeliner", "a"=>"mascara", "b"=>"primer",
"c"=>"foundation");
krsort($makeup);
foreach ($makeup  as $key => $val) {
    echo "$key = $val\n";
    }
    ?>

<hr>

<p> 17. Sort an array using a "natural order" algorithm </p>

<?php
$array1 = $array2 = array("13", "10", "30", "1");

asort($array1);
echo "Standard sorting\n";
print_r($array1);

natsort($array2);
echo "\nNatural order sorting\n";
print_r($array2);
?>

<hr>
<p> 18. Shuffle an array </p>

<?php
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
    }
    ?>

<p> 19. Set the internal pointer of an array to its last element </p>

<?php

$vegetables  = array('spinach', 'celery', 'carrots');
echo end($vegetables);
?>
 
<hr>

<p> 20. Calculate the sum of values in an array </p>

<?php
$a = array(2,
