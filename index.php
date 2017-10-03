ount the number of Words in a String</p>

<?php
echo str_word_count("What is your name>");
?>

<hr>

<p>2. Print Function </p>
<?php
$str = "Hello NJIT";
print $str;
?>

<hr>

<p>3. Word Wrap</p>
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

<p> 6. Replace text within a string</p>
<?php
echo str_replace("New Jersey", "New York", "Hello
New Jersey!");
?>
<hr>


<p> 7. Make string's first character uppercase </p>
<?php
echo ucfirst("how are you?")
?>

<hr>

<p> 8. Unquote string </p>

<?php
$str = "How are you?";
echo stripslashes($str);
?>

<hr>

<p> 9. Reverse a String</p>

<?php
echo strrev("I like to eat ramen!")
?>

<hr>

<p> 10. Get string length</p>
<?php
$str = 'how old are you?';
echo strlen($str);?>

<hr>
