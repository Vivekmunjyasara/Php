<?php

$temp_files=array("temp15.txt","temp10.txt","temp1.txt","temp22.txt","temp2.txt");

natsort($temp_files);
echo "natural order: ";
print_r($temp_files);
echo "<br/>";


natcasesort($temp_files);
echo "natural order case insenstive: ";
print_r($temp_files);

?>
