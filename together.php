<html>
    <head>
        <title>Example of html with php</title>
    </head>
    <body>
       <?php
                $name=$_POST['name'];
       ?>
        <h1>My name is <?PHP  echo $name ; ?></h1>
        <p>Here i am trying to use html and php tags together</p>
        
        <p>In our php code i have declared a variable named $name and it has value as <?PHP echo $name ?></p>
        <pre>
            hi
                my name 
                        is <?PHP  echo $name; ?> 
        </pre>
        
        
    </body>
</html>

