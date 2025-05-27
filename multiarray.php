<?php

$two_wheeler = array('bike', 'scooty');
$three_wheeler = array('auto', 'tempo');
$four_wheeler = array('car', 'bus');

$mail=array('maal gadi','vande_bharat');
$express=array('rajdani','bikaner express');
$railways=array('mail'=> $mail,'express'=>$express);


$cruise=array('ocean river','special cruise');
$speedboat=array('bay boats','deck boats');
$waterways=array('cruise'=>$cruise,'speedboat'=>$speedboat);


$helicopter=array('chooper','army helicopter');
$plane=array('indigo','qatar airways');
$airways=array('helicopter'=>$helicopter,'plane'=>$plane);


$vehicle = array('two-wheeler' => $two_wheeler, 'three-wheeler' => $three_wheeler,'four-wheeler' => $four_wheeler);


echo $vehicle['two-wheeler'][0];
echo "<br>";
echo $vehicle['two-wheeler'][1];
echo "<br>";
echo $vehicle['three-wheeler'][0];
echo "<br>";
echo $vehicle['three-wheeler'][1];
echo "<br>";
echo $vehicle['four-wheeler'][0];
echo "<br>";
echo $vehicle['four-wheeler'][1];
echo "<br>";

$types_of_transport=array('roadways'=>$vehicle,'waterways'=>$waterways,'railways' =>$railways ,'airways'=>$airways);

echo $types_of_transport['airways']['plane'][1];




?>