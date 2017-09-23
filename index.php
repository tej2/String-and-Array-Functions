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
