<?php

$a=array(
    array(
        'id'=>5698,
        'first_name'=>'peter',
        'last_name'=>'Griffin',
     ),
     array(
         'id'=>4767,
         'first_name'=>'ben',
         'last_name'=>'smith',
    ),  
     array(
         'id'=>3809,
         'first_name'=>'joe',
         'last_name'=>'doe',
     ),
);
     $last_names= array_column($a, 'last_name');
     print_r($last_names);
?>
