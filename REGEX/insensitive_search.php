<?php

echo "<h1>Regex Modifier: i</h1>";

echo "<p>How many occurance of the letter s is in the text W3Schools:</p>";

$txt="W3Schools";
$pattern="/s/i";

echo preg_match_all($pattern,$txt);

echo "<p>The matches were found here: </p>";

echo preg_replace($pattern,"#",$txt);

echo "<p>(Each match was replaced by a # character)</p>";



?>
