<!DOCTYPE html>
<html>
    <head>
        <title>result calculator 2</title>
        
    </head>
    <body>
        <style>
            body{
                font-family: Arial,sans-serif;
                background: #f7f9fc;
                margin: 0;
                padding: 0;
            }
            .container{
                max-width: 500px;
                margin: 40px auto;
                background: #ffffff;
                padding: 30px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                border-radius: 8px;
            }
            
            h2{
                text-align: center;
                color: #333;
            }
            .input-group{
                display: flex;
                flex-direction: column;
                margin-bottom: 15px;
            }
            
            .input-group label{
                margin-bottom: 5px;
                font-weight: bold;
            }
            
            .input-group input{
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 4px;
             font-size: 1rem;
            }
            
            .error{
                color:red;
                font-size: 0.9rem;
                display:none;
            }
            
            button{
                width:100px;
                padding: 12px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 6px;                
            }
            
            button:hover{
                background-color: #0056b3;
            }
            @media(max-width:600px)
            {
                .container{
                    margin: 20px;
                    padding: 20px;
                }
            }
        </style>
        
        <div class="container">
            <h1>RESULT CALCULATOR 2</h1>
        </h2>ENTER MARKS (OUT OF 100)</h2>
        <br><br>
        <form id="marksform" onsubmit="return validateform();">
         <?php
         for($i=1;$i<=6;$i++){
         echo '<div class="input-group">
         <label for="subject' .$i .'">subject' .$i.':</label>
         <input type="number" id="subject' . $i .'"name-subject' . $i . '" min="0" max="100" required>
         <div class="error" id="error' . $i . '">Please enter a valid mark(0-100).</div>
         </div>';
        }
         ?>
         <button type="submit">Submit</button>
        </form>
        </div>
        
        <script>
            function validateform(){
                let isvalid=true;
                
                for(let i=1; i<=6; i++){
                    const input=document.getElementById('subject' + 1);
                    const error=document.getElementById('error' + 1);
                    const value=parseInt (input.value);
                    
                    
                    if(isNaN(value) || value < 0 || value > 100)
                    {
                        error.style.display='block';
                        isValid=false;
                }
                else
                {
                    error.style.display='none';
                }
            }
            return isValid;
            }
            </script>
    </body>
</html>
