<!Doctype html>
<html>
    <head>
        <title>ADMISSION FORM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
        <link rel="stylesheet" href="demo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <script src="demo.js"></script>
    </head>

    <body>        
        <form onsubmit="return hi()" action="process_admission_form.php" method="post" enctype="multipart/form-data" class="container admission ani con rounded container ">
            <br><br>
            <div class="text-center">
                <h1 class="fw-bold display-3 down  border border-1 border-dark rounded-pill mb-5">Admission Form</h1>
            </div>
            <div class="row mb-3 ">
                <div class="col-lg-3 right">
                    <input id="fn" class="col-lg-12 inputt wid mar bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white"  type="text" name="fname" placeholder="First Name">
                    <div id="fn_error" class="red blink "></div>
            </div>
                   
                <div class="col-lg-3 right">
                    <input id="mn" class="col-lg-12  wid inputt mar bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="text" name="mname" placeholder="Middle Name">
                    <div id="mn_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 left ">
                    <input id="ln" class="col-lg-12  wid mar inputt bg-transparent border-top-0 border-start-0 border-white border-end-0 text-white" type="text" name="lname" placeholder="Last Name">
                    <div id="ln_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 left">
                    <input id="pn" class="col-lg-12 t mar wid inputt bg-transparent border-top-0 border-start-0 border-end-0 border-white text-white" type="text" name="phone" placeholder="Enter Mobile No">
                    <div id="pn_error" class="red blink "></div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 bigright ">
                    <input id="ema" class="col-lg-12  mt-2 mar inputt wid bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="email" name="ema" placeholder="Email Address">
                    <div id="ema_error" class="red blink "></div>
                </div>
                
                <div class="left col-lg-6">
                    <span class="col-lg-6">Select Gender:</span>
                    <br>
                    <span class="col-lg-1">
                    <input id="m" class="inputt" type="radio" name="gender" value="Male" >Male 
                    </span>
                    <span class="col-lg-1 inputt">
                    <input id="f" class="inputt" type="radio" name="gender" value="Female">Female 
                    </span>
                    <span class=" inputt">
                    <input id="o" class="inputt" type="radio" name="gender" value="Other">Other
                    </span>
                    <div id="gender_error" class="red blink "></div>
                </div>
            </div>  
                    
            <div class="row h">
                <div class="col-lg-3 bo mt-3 right">   
                    <span class=" col-lg-12 fw-bold">🎓Education</span>
                    <select id="edu" class="col-lg-12 inputt pad mt-2 wid border-white bg-transparent" name="eq">
                        <option name="Education" >Education</option>
                        <option name="SSC">SSC</option>
                        <option name="HSC">HSC</option>
                        <option name="Diploma">Diploma</option>
                        <option name="Post Graduation">Post Graduation</option>
                    </select>
                    <div id="edu_error" class="red blink "></div>

                </div>

                <div class="col-lg-3 mt-3 right">

                    <span  class=" col-lg-12 fw-bold ">𝗘𝗡╸Language</span>
                    <select id="lan" class="col-lg-12 mt-2 inputt pad wid border-white bg-transparent" name="lan">
                        <option  name="Language" >Language</option>
                        <option name="Marathi">Marathi</option>
                        <option name="Hindi">Hindi</option>
                        <option name="Gujrati">Gujrati</option>
                        <option name="English">English</option>
                        <option name="Others">Others</option>
                    </select>
                    <div id="lan_error" class="red blink "></div>
                </div>


                <div class="col-lg-3 mt-3 left">
                    <span class="col-lg-12 mt-4 fw-bold border-white">% Percentage</span>
                    <select id="per" class="col-lg-12 mt-2 inputt pad wid border-white bg-transparent" name="per">
                        <option  name="Percentage">Percentage</option>
                        <script>
                            for(let i=0;i<=100;i++)
                            {
                                document.write("<option>"+i+"</option>");
                            }
                        </script>
                    </select>
                    <div id="per_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 mt-3 left">
                    <span  class="col-lg-12 mt-4 fw-bold">📅Passing Year</span>
                    <select id="pas" class="col-lg-12 mt-2 inputt pad wid border-white bg-transparent" name="pass">
                        <option name="Passing  Year" >Passing year</option>
                        <script>
                            for(let i=1800;i<=2025;i++)
                            {
                                document.write("<option>"+i+"</option>");
                            }
                        </script>

                    </select>   
                    <div id="pas_error" class="red blink "></div>
                </div>
            </div>    
            <div class="row mt-4">

                <div class="col-lg-3 right">
                    <input id="wing" class="col-lg-11 inputt mar border-white bg-transparent wid border-top-0 border-start-0 border-end-0 text-white" name="wing" type="text" placeholder="Wing/Flat no">
                    <div id="wing_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 right">
                    <input id="build" class="col-lg-11 inputt mar wid border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white " name="build" type="text" placeholder="Building/Society">
                    <div id="build_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 left">
                    <input id="area" class="col-lg-11 inputt mar border-white bg-transparent wid border-top-0 border-start-0 border-end-0 text-white" name="area" type="text" placeholder="Area">
                    <div id="area_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 left">
                    <input id="city" class="col-lg-11  wid  inputt mar border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" name="city" type="text" placeholder="City">   
                    <div id="city_error" class="red blink "></div>   
                </div>
            </div>    

            <div class="row mt-3">
                <div class="col-lg-6 bigright">
                    <input id="land" class="col-lg-12 inputt mar border-white bg-transparent wid border-top-0 border-start-0 border-end-0 text-white" name="land" type="text" placeholder="Landmark">
                    <div id="land_error" class="red blink "></div>
                </div>

                <div class="col-lg-6 bigleft">
                    <input id="pin" class="col-lg-12 inputt mar border-white wid bg-transparent border-top-0 border-start-0 border-end-0 text-white" name="pin" type="text%" placeholder="Enter PIN code">
                    <div id="pin_error" class="red blink "></div>
                </div>
            </div>    

            <div class="row mt-3">    
                <div class="col-lg-3 right "> 
                    <span class="col-lg-12 fw-bold ">🎂Date of Birth</span>

                    <input id="dob" class="col-lg-12  mt-2 inputt border-white mar  bg-transparent border-top-0 wid border-start-0 border-end-0 text-white " name="dob" type="date">
                    <div id="dob_error" class="red blink "></div>
                </div>    

                <div class="col-lg-3 right">  
                    <span class="col-lg-12 mt-4 fw-bold">🩸Blood Group</span>
                    <select id="bg" class="col-lg-12 mt-2 inputt pad wid  border-white bg-transparent" name="bg">
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
                    <div id="bg_error" class="red blink"></div>
                </div>    

                <div class="col-lg-3 left">
                    <span class="col-lg-12 mt-4 fw-bold">🌐Country</span>
                    <select id="cou" class="col-lg-12 mt-2 inputt pad border-white wid  mt-1 bg-transparent" name="country">
                        <option name="Country">Country</option>
                        <option name="India">India</option>                 
                    </select> 
                    <div id="cou_error" class="red blink "></div>
                </div>

                <div class="col-lg-3 left">
                    <span class="col-lg-12 mt-1  b pad fw-bold bl ">🌐State</span>   

                    <select id="sta" class="col-lg-12 mt-1 inputt pad border-white wid bg-transparent" name="state">
                        <option name="State">State</option>
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
                    <div id="sta_error" class="red blink"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 bigright">
                    <input class="col-lg-12  mar wid border-white inputt bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="name" name="ref" placeholder="Refrence By">   
                </div>

                <div class="col-lg-6 mb-4 left">
                    <input id="photo" class="col-lg-12 inputt mar wid border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" name="photo" type="file" accept="image/jpeg,image/jpg"  placeholder="Upload Your Photo">
                    <div id="photo_error" class="red blink "></div>
                </div>

            </div>
          
            <div  class="row">
                <input class=" mll p-2 pop top mt-4 hov border rounded-pill" type="submit" name="submit">         
                </div>
                
            <br><br>
            
        </form>  
        
    </body>
</html>
