<?php
$sam=array('1'=>'Samanta',
    '2'=>'Shikhar dhawan',
    '3'=>'Hardik pandya',
    '4'=>'Yuzi chahal');

echo $sam['3'];

$sam['5']='  himanshu shah';

echo $sam['5'];


echo '<br><br>';

//new array
$vivek=array('hardik ','kholi ','rohit ','naresh ');

   echo $vivek[1];     
  echo '<br><br>';
   
//new array   
array_push($vivek,'vivek ');  
 echo $vivek[4];
echo '<br><br>';

//new array
array_unshift($vivek,'krishna ');
echo $vivek[0];
echo '<br><br>';

//new array
array_pop($vivek);
echo $vivek[2];
 echo '<br><br>';
 
//new array
array_shift($vivek);
 echo $vivek[0];
echo '<br><br>';

//unset
 unset($vivek);
echo $vivek[0];
?>
