<?php

// Create simple string
$string = 'Hello Setu';
$string2 = 'Hello There';
echo $string . '<br>'; 
echo $string2 . '<br>'; 

// String concatenation
echo 'Hello' .'-'. 'World' .' '. 'and PHP' . '<br>';


// String functions
$string = "    Hello World   ";
echo "<br>" . PHP_EOL;
echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hello world and php') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>';
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8) . '<br>';
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
echo "16 - " . str_ireplace("hello", 'PHP', $string) . '<br>';


// Multiline text and line breaks

$LongText = "
Hello, my name is Setu 
I am 27.
I love my daughter
";
echo $LongText;
echo nl2br($LongText) . '<br>';

// Multiline text and reserve html tags

$LongText = "
Hello, my name is Setu <br>
I am <br> 27 <br>.
I love my daughter <br>
";
echo "1 - " . $LongText.'<br>';
echo "2 - " . nl2br($LongText).'<br>';
echo "3 - " . htmlentities($LongText).'<br>';
echo "4 - " . nl2br(htmlentities($LongText)).'<br>';
echo "5 - " . html_entity_decode('&lt;b&gt;Setu&lt;b&gt;');
// https://www.php.net/manual/en/ref.strings.php