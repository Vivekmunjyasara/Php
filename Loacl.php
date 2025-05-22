<html>
    <head>
        <title>
            Local Variable 
        </title>
    </head>
    <body>
<?php

echo '<h1> Example of Variable Scope</h1>';
echo '<ol><li>Local</li><p>Variable Inside the Function,'.' or Block are local variable</p>';
function example_local()
{
    $x=11;# it a local variable
    echo '<br><br>Example of local scope $x='.$x;
    
}
example_local();
echo "<br><br> It is still accessiable".$x; #X being a local variable inside Example_local
                                            #function  cant be accessed outside of function

?>
    </body>
</html>

