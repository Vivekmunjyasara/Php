<?php

$a="original";
$my_array=array("a"=>"cat","b"=>"dog","c"=>"horse");
extract($my_array);

echo "\$a=$a;\$b=$b; \$c=$c";
 

?>

