<!Doctype html>
<html>
    <head>
        <title>ADMISSION FORM</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
            <link rel="stylesheet" href="demo.css">
        
            <script src="demo.js"></script>
    </head>
    
    <body>        
        <form onsubmit="return done()" class="container con rounded container ">
            <br><br>
            <div class="text-center">
                <h1 class="fw-bold display-3 border border-1 border-dark rounded-pill mb-5 ">Admission Form</h1>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <input id="fn" class="col-lg-12 bot  wid widd widdd widddd widdddd widddddd md_ad_form bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white"  type="name" placeholder="First Name">
                    <div id="error"></div>
                </div>

                <div class="col-lg-3">
                    <input id="mn" class="col-lg-12 bot wid widd widdd widddd widdddd widddddd  md_ad_form bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="name" placeholder="Middle Name">
                    <div id="error"></div>
                </div>

                <div class="col-lg-3">
                    <input id="ln" class="col-lg-12 bot wid widd widdd widddd widdddd widddddd md_ad_form  bg-transparent border-top-0 border-start-0 border-white border-end-0 text-white" type="name" placeholder="Last Name">
                </div>

                <div class="col-lg-3">
                    <input id="pn" class="col-lg-12 bott mb-4 md_ad_form wid widd widdd widddd widdddd widddddd  bg-transparent border-top-0 border-start-0 border-end-0 border-white text-white" type="number" placeholder="Enter Mobile No">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <input id="ema" class="col-lg-12 bot mt-2 md_ad_form wid widd widdd widddd widdddd widddddd bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="email" placeholder="Email Address">
                </div>

                <span class="col-lg-6 m sp mt-3">Select Gender :

                    <span class="col-lg-6"></span>
                    <br>
                    <input id="m" class="col-lg-1 m sp" type="radio" name="gender" value="Male" >Male 
                    <input id="f" class="col-lg-1 m sp" type="radio" name="gender" value="Female">Female 
                    <input id="o" class="col-lg-1 m sp" type="radio" name="gender" value="Other">Other</span>
                        
            </div>   

            <div class="row h">
                <div class="col-lg-3 bo mt-3">   
                    <span class=" col-lg-12 fw-bold">🎓Education</span>
                    <select id="edu" class="col-lg-12 bot pad mt-2 wid widd widdd widddd widdddd widddddd border-white bg-transparent">
                        <option name="Education" disabled selected>Education</option>
                        <option name="SSC">SSC</option>
                        <option name="HSC">HSC</option>
                        <option name="Diploma">Diploma</option>
                        <option name="Post Graduation">Post Graduation</option>
                    </select>
                </div>

                <div class="col-lg-3 mt-3">
                    
                    <span  class=" col-lg-12 fw-bold">𝗘𝗡╸Language</span>
                    <select id="lan" class="col-lg-12 mt-2 bot pad wid widd widdd widddd widdddd widddddd border-white bg-transparent">
                        <option  name="Language" disabled selected>Language</option>
                        <option name="Marathi">Marathi</option>
                        <option name="Hindi">Hindi</option>
                        <option name="Gujrati">Gujrati</option>
                        <option name="English">English</option>
                        <option name="Others">Others</option>
                    </select>
                    
                </div>
                
                     
                <div class="col-lg-3 mt-3">
                    <span class="col-lg-12 mt-4  fw-bold border-white">% Percentage</span>
                    <select id="per" class="col-lg-12 mt-2 bot pad wid widd widdd widddd widdddd widddddd border-white bg-transparent">
                        <option  name="Percentage" disabled selected>Percentage</option>
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo "<option> $i </option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-lg-3 mt-3">
                    <span  class="col-lg-12 mt-4 fw-bold">📅Passing Year</span>
                    <select id="pas" class="col-lg-12 mt-2 bot pad wid widd widdd widddd widdddd widddddd border-white bg-transparent">
                        <option name="Passing  Year" disabled selected>Passing year</option>
                        <?php
                        for ($i = 1800; $i < 2026; $i++) {
                            echo "<option> $i </option>";
                        }
                        ?>
                    </select>    
                </div>
            </div>    
            <div class="row mt-4">

                <div class="col-lg-3">
                    <input id="wing" class="col-lg-11 bot md_ad_form border-white bg-transparent wid widd widdd widddd widdddd widddddd border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Wing/Flat no">
                </div>

                <div class="col-lg-3">
                    <input class="col-lg-11 bot md_ad_form wid widd widdd widddd widdddd widddddd border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Building/Society">
                </div>

                <div class="col-lg-3">
                    <input class="col-lg-11 bot md_ad_form border-white bg-transparent wid widd widdd widddd widdddd widddddd border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Area">
                </div>

                <div class="col-lg-3">
                    <input class="col-lg-11 bot wid widd widdd widddd widdddd widddddd  md_ad_form border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="City">   
                </div>
            </div>    

            <div class="row mt-3">
                <div class="col-lg-6">
                    <input class="col-lg-12 bot md_ad_form border-white bg-transparent wid widd widdd widddd widdddd widddddd border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Landmark">
                </div>

                <div class="col-lg-6">
                    <input id="pi" class="col-lg-12 bot md_ad_form border-white wid widd widdd widddd widdddd widddddd bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Enter PIN code">
                </div>
            </div>    

            <div class="row mt-3">    
                <div class="col-lg-3 "> 
                    <span class="col-lg-12 fw-bold ">🎂Date of Birth</span>

                    <input class="col-lg-12 bot mt-2 mb-3 border-white md_ad_form  bg-transparent border-top-0 wid widd widdd widddd widdddd widddddd border-start-0 border-end-0 text-white " type="date">

                </div>    

                <div class="col-lg-3">  
                    <span class="col-lg-12 mt-4 fw-bold">🩸Blood Group</span>
                    <select class="col-lg-12 mt-2 bot mb-3 pad wid widd widdd widddd widdddd widddddd  border-white bg-transparent">
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

                <div class="col-lg-3">
                    <span class="col-lg-12 mt-4 fw-bold">🌐Country</span>
                    <select class="col-lg-12 mt-2 bot mb-3 pad border-white wid widd widdd widddd widdddd widddddd  mt-1 bg-transparent ">
                        <option name="Country"> Select Country</option>
                        <option name="India">India</option>                 
                    </select> 
                </div>

                <div class="col-lg-3">
                    <span class="col-lg-12 mt-1 fw-bold bl ">🌐State</span>   

                    <select class="col-lg-12 mt-2 bot mb-3 pad border-white wid widd widdd widddd widdddd widddddd bg-transparent">
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

            <div class="row mt-3">
                <div class="col-lg-6">
                    <input class="col-lg-12 bot md_ad_form wid widd widdd widddd widdddd widddddd border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="name" placeholder="Refrence By">   
                </div

                <div class="col-lg-6">
                    <input class="col-lg-12 bot mt-3 md_ad_form wid widd widdd widddd widdddd widddddd border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="file"  placeholder="Upload Your Photo">
                </div>

            </div>
            <div class="row mt-3">
                <span class="col-lg-3"></span>
                <input class="col-lg-5 mt-4 widoned widd widdd widddd widdddd widddddd text-center  border-white rounded-pill" type="submit">
            </div>  
            <br><br>
        </form>     
    </body>
</html>
