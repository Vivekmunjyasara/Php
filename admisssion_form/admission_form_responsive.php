<!Doctype html>
<html>
    <head>
        <title>ADMISSION FORM</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
        
        <style>
            body{
                background-color: #dac292;
            }
            .con{
                background-color: #b9936c;
            }
            
            @media(max-width:576px){ 
                .md_ad_form
                {
                    margin: 20px 20px 20px 0px; 
                }
                input::placeholder{
                    color: yellow !important;
                    opacity: 1;
                }
            }
            
            @media(max-width:768px){
                
                input::placeholder{
                    color: white !important ;
                    opacity: 1;
                }
                }
           
            input::placeholder{
                color: white;
            }
            span{
                color: white;
            }
            input{
                outline: none;
            }
            .container{
                max-width: 700px;
            }
        </style>
    
    </head>
    <body>        
            <form class="container con rounded ">
                <br><br>
                <div class="text-center">
                    <h1 class="fw-bold display-3 border border-1 border-dark rounded-pill mb-5 ">Admission Form</h1>
                </div>
            
            <div class="row">
                <div class="col-sm-3">
                <input class="col-sm-12 ms-3 md_ad_form bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white"  type="name" placeholder="First Name">
                </div>
                
                <div class="col-sm-3">
                <input class="col-sm-12 md_ad_form bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="name" placeholder="Middle Name">
                </div>
                
                <div class="col-sm-3">
                <input class="col-sm-12 md_ad_form  bg-transparent border-top-0 border-start-0 border-white border-end-0 text-white" type="name" placeholder="Last Name">
                </div>
                
                <div class="col-sm-3">
                <input class="col-sm-12 md_ad_form  bg-transparent border-top-0 border-start-0 border-end-0 border-white text-white" type="number" placeholder="Enter Mobile No">
                </div>
                
                </div>
            <div class="row">
                <div class="col-sm-6">
                 <input class="col-sm-12 mt-3 p-2 md_ad_form  bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="email" placeholder="Email Address">
                </div>
                 
               <span class="col-sm-6 mt-3">Select Gender :
            
                <span class="col-sm-6"></span>
                <br>
                
                         <input class="col-sm-1 " type="radio" value="Male">Male 
                         <input class="col-sm-1 " type="radio" value="Female">Female 
                         <input class="col-sm-1 " type="radio" value="Other">Other</span>
            </div>   
            
            <div class="row">
                <div class="col-sm-3 mt-3">   
               <span class=" col-sm-12 fw-bold">Education</span>
                 <select class="col-sm-12 border-white bg-transparent">
                    <option name="Education">Education</option>
                    <option name="SSC">SSC</option>
                    <option name="HSC">HSC</option>
                    <option name="Diploma">Diploma</option>
                    <option name="Post Graduation">Post Graduation</option>
                </select>
            </div>
             
            <div class="col-sm-3 mt-3">
               <span class=" col-sm-12 fw-bold">Language</span>
                <select class="col-sm-12 border-white bg-transparent">
                    <option name="Language">Language</option>
                    <option name="Marathi">Marathi</option>
                    <option name="Hindi">Hindi</option>
                    <option name="Gujrati">Gujrati</option>
                    <option name="English">English</option>
                    <option name="Others">Others</option>
                </select>
             </div>
            
            <div class="col-sm-3 mt-3">
               <span class="col-sm-12 mt-4 fw-bold border-white">Percentage</span>
                <select class="col-sm-12 mt-1 border-white bg-transparent">
                    <option name="Percentage">Percentage</option>
                   <?php
                    for($i=1;$i<=100;$i++)
                    {
                        echo "<option> $i </option>";
                    }
                    ?>
                </select>
            </div>
            
            <div class="col-sm-3 mt-3">
               <span class="col-sm-12 mt-4 fw-bold">Passing Year</span>
                 
                <select class="col-sm-12 mt-1 border-white bg-transparent">
                    <option name="Passing  Year">Passing year</option>
                    <?php
                    for($i=1800;$i<2026;$i++)
                    {
                        echo "<option> $i </option>";
                    }
                    ?>
                </select>    
            </div>
        </div>    
            <div class="row">
                
                <div class="col-sm-3">
                <input class="col-sm-11 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="address" placeholder="Wing/Flat no">
                </div>
                
                <div class="col-sm-3">
                <input class="col-sm-11 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="address" placeholder="Building/Society">
                </div>
                
                <div class="col-sm-3">
                <input class="col-sm-11 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="address" placeholder="Area">
                </div>
                
                <div class="col-sm-3">
                <input class="col-sm-11 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="address" placeholder="City">   
                </div>
            </div>    
                
            <div class="row">
                <input class="col-sm-5 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="address" placeholder="Landmark">
                <span class="col-sm-1"></span>
                
                <input class="col-sm-5 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="address" placeholder="Enter PIN code">
            </div>    
            
        <div class="row mt-3">    
            <div class="col-sm-3 "> 
               <span class="col-sm-12 fw-bold  ">Date of Birth</span>
               
                  <input class="col-sm-12 mt-1 border-white md_ad_form  bg-transparent border-top-0 border-start-0 border-end-0 text-white " type="date">
               
            </div>    
                
            <div class="col-sm-3">  
                <span class="col-sm-12 mt-4 fw-bold">Blood Group</span>
                <select class="col-sm-12 mt-1 border-white bg-transparent">
                    <option name="Blood Group">Blood Group</option>
                    <option name="A+">A+</option>
                    <option name="A-">A-</option>
                    <option name="B+">B+</option>
                    <option name="B-">B-</option>
                    <option name="AB+">AB+</option>
                    <option name="AB-">AB-</option>
                    <option name="O+">O+</option>
                    <option name="O-">O-</option>
                </select>
            </div>    
                
            <div class="col-sm-3">
               <span class="col-sm-12 mt-4 fw-bold">Country</span>
                <select class="col-sm-12 border-white mt-1 bg-transparent ">
                    <option name="Country"> Select Country</option>
                    <option name="India">India</option>                 
                </select> 
            </div>

            <div class="col-sm-3">
                <span class="col-sm-12 mt-4 fw-bold ">State</span>   
                
                <select class="col-sm-12 mt-1 border-white bg-transparent">
                    <option name="State"> Select State</option>
                    <option name="Andhra Pradesh">Andhra pradesh</option>
                    <option name="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option name="Assam">Assam</option>
                    <option name="Bihar">Bihar</option>
                    <option name="Chattisgarh">Chattisgarh</option>
                    <option name="Delhi">Delhi</option>
                    <option name="Goa">Goa</option>
                    <option name="Haryana">Haryana</option>
                    <option name="Himachal Pradesh">Himachal Pradesh</option>
                    <option name="Jarkhand">Jarkhand</option>
                    <option name="Karnataka">Karnataka</option>
                    <option name="Kerala">Kerala</option>
                    <option name="Madhaya Pradesh">Madhaya Pradesh</option>
                    <option name="Maharastra">Maharastra</option>
                    <option name="Manipur">Manipur</option>
                    <option name="Meghalaya">Meghalaya</option>
                    <option name="Mizoram">Mizoram</option>
                    <option name="Nagaland">Nagaland</option>
                    <option name="Odisa">Odisa</option>
                    <option name="Punjab">Punjab</option>
                    <option name="Rajasthan">Rajasthan</option>
                    <option name="Sikkim">Sikkim</option>
                    <option name="Tamil Nadu">Tamil Nadu</option>
                    <option name="Telangana">Telangana</option>
                    <option name="Tripura">Tripura</option>
                    <option name="Uttarakhand">Uttarakhand</option>
                    <option name="Uttar Pradesh">Uttar pradesh</option>
                    <option name="West Bengal">West Bengal</option>   
                </select>
            </div>
        </div>
            
            <div class="row">
                <input class="col-sm-5 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="name" placeholder="Refrence By">   
                <span class="col-sm-1"></span>
                
                <div class="col-sm-6">
                <input class="col-sm-12 mt-4 md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="file" placeholder="Upload Your Photo">
                </div>
                
            </div>
                 <div class="row">
        <span class="col-sm-3"></span>
            <input class="col-sm-5 mt-5 text-center border-white rounded-pill" type="submit">
        </div>  
                <br><br>
                
            
            </form>     
    </body>
    </html>