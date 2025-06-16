<!Doctype html>
<html>
    <head>
        <title>ADMISSION FORM</title>
        <style>
            body{
                background: #988eed;
            }

            .container{
                max-width: 750px;
                margin: 40px auto;
                background: #4e488c;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                padding: 50px;
                border-radius: 5px;
            }
            h1{
                text-align: center;
                color: white;
                border: 1px solid white;
                padding-bottom: 10px;
                padding-left: 2px;
                padding-right: 2px;
                padding-top: 10px;
                border-radius: 7px;
            }
            label{
                color: white;
            }
            option{
                background: #4e488c;
                border: 1px solid black;
            }
            #hii{
                color: red;
            }
            button{
                border: 1px solid white;
                padding-left: 350px;
                padding-right: 350px;
                border-radius: 15px;
                padding-bottom: 5px;
                padding-top: 5px;
            }

        </style>
    </head>
    <body>
        <div class="container">
                <h1>Admission Form</h1>
            <form>
                <input type="name" placeholder="First Name">
                <input type="name" placeholder="Middle Name">
                <input type="name" placeholder="Last Name">
                <input type="number" placeholder="Enter Mobile No">
                <br><br><br>
                <input type="email" placeholder="Email Address">

                <label>Select Gender :</label>
                <pre>
                         <input type="radio" value="Male">Male  <input type="radio" value="Female">Female  <input type="radio" value="Other">Other
                </pre>

                <label><b>Education</b></label>
                <select>
                    <option name="Education">Education</option>
                    <option name="SSC">SSC</option>
                    <option name="HSC">HSC</option>
                    <option name="Diploma">Diploma</option>
                    <option name="Post Graduation">Post Graduation</option>
                </select>

                <label><b> Language</b></label>
                <select>
                    <option name="Language">Language</option>
                    <option name="Marathi">Marathi</option>
                    <option name="Hindi">Hindi</option>
                    <option name="Gujrati">Gujrati</option>
                    <option name="English">English</option>
                    <option name="Others">Others</option>
                </select>

                <label><b>Percentage</b></label>
                <select>
                    <option name="Percentage">Percentage</option>
                    <option name="10">10</option>
                    <option name="20">20</option>
                    <option name="30">30</option>
                    <option name="40">40</option>
                    <option name="50">50</option>
                </select>

                <label><b>Passing Year</b></label>
                <select>
                    <option name="Passing  Year">Passing year</option>
                    <option name="2020">2020</option>
                    <option name="2021">2021</option>
                    <option name="2022">2022</option>
                    <option name="2023">2023</option>
                    <option name="2024">2024</option>
                </select>
                <br><br><br><br>

                <input type="address" placeholder="Wing/Flat no">
                <input type="address" placeholder="Building/Society">
                <input type="address" placeholder="Area">
                <input type="address" placeholder="City">   
                <br><br>
                <input type="address" placeholder="Landmark">
                <input type="address" placeholder="Enter PIN code">

                <br><br><br>
                <label>Date of Birth</label>
                <input type="date">

                <label><b>Blood Group</b></label>
                <select>
                    <option name="Blooad Group">Blood Group</option>
                    <option name="A+">A+</option>
                    <option name="A-">A-</option>
                    <option name="B+">B+</option>
                    <option name="B-">B-</option>
                    <option name="AB+">AB+</option>
                    <option name="AB-">AB-</option>
                    <option name="O+">O+</option>
                    <option name="O-">O-</option>
                </select>

                <label>Country</label>

                <select>
                    <option name="Country"> Select Country</option>
                    <option name="India">India</option>                 
                </select>

                <label><b>State</b></label>
                <select>
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
                <br><br><br>

                <input type="name" placeholder="Refrence By">   
                <input type="file" placeholder="Upload Your Photo">
                <br><br><br>
            </form>
            <button type="submit">Submit</button>

        </div>
    </body>
</html>


