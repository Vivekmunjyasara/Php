<?PHP

class fetching {

    public $localhost, $dbname, $conn, $query, $datapdo, $result,$offset,$stmt,$totalquery,$next,$prev;

    function getdata() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";

        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
            $this->offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $this->stmt = $this->datapdo->prepare("SELECT * FROM admission_form ORDER BY roll_no ASC LIMIT :limit OFFSET $this->offset");
            $this->totalquery=$this->datapdo->query("select count(*) from admission_form ");
            $this->total=$this->totalquery->fetchColumn();
            $this->query = "SELECT first_name,middle_name,last_name,phone,email,gender,education,language,percentage,passing_year,wing,building,area,city,landmark,pincode,dob,blood_grp,country,state,refrence,image FROM admission_form";
            $this->result = $this->datapdo->query($this->query);
            echo '<!Doctype html>
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
        <form onsubmit="return hi()" action="process_admission_form.php" method="post" enctype="multipart/form-data" class="admission ani con rounded container ">
            <br><br>
            <div class="text-center">
                <h1 class="fw-bold display-3 down  border border-1 border-dark rounded-pill mb-5">Admission Form</h1>
            </div>';
            while ($row = $this->result->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="row mb-3 ">
                <div class="col-lg-3 right">
                    <input readonly value="' . $row['first_name'] . '" class="col-lg-12 inputt wid mar bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white"  type="text" name="fname" placeholder="First Name">
                    
            </div>
                   
                <div class="col-lg-3 right">
                    <input readonly value="' . $row['middle_name'] . '" class="col-lg-12  wid inputt mar bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="text" name="mname" placeholder="Middle Name">
                    
                </div>

                <div class="col-lg-3 left ">
                    <input readonly value="' . $row['last_name'] . '" class="col-lg-12  wid mar inputt bg-transparent border-top-0 border-start-0 border-white border-end-0 text-white" type="text" name="lname" placeholder="Last Name">
                    
                </div>

                <div class="col-lg-3 left">
                    <input readonly value="' . $row['phone'] . '" class="col-lg-12 t mar wid inputt bg-transparent border-top-0 border-start-0 border-end-0 border-white text-white" type="text" name="phone" placeholder="Enter Mobile No">
                    
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 bigright ">
                    <input readonly value="' . $row['email'] . '" class="col-lg-12  mt-2 mar inputt wid bg-transparent border-top-0 border-white border-start-0 border-end-0 text-white" type="email" name="ema" placeholder="Email Address">
                    
                </div>
                
                <div  class="left col-lg-6">
                    <span class="col-lg-6">Select Gender:</span>
                    <br>
                    <span class="col-lg-1">
                    <input readonly value="' . $row['gender'] . '" class="inputt" type="radio" name="gender" value="Male" >Male 
                    </span>
                    <span class="col-lg-1 inputt">
                    <input readonly value="' . $row['gender'] . '" class="inputt" type="radio" name="gender" value="Female">Female 
                    </span>
                    <span class=" inputt">
                    <input readonly value="' . $row['gender'] . '" class="inputt" type="radio" name="gender" value="Other">Other
                    </span>
                    
                </div>
            </div>  
                    
            <div class="row h">
                <div class="col-lg-3 bo mt-3 right">   
                    <span class=" col-lg-12 fw-bold">🎓Education</span>
                    <input readonly value="' . $row['education'] . '" class="col-lg-12 inputt pad mt-2 wid border-white bg-transparent" name="eq" > 
                    </div>


                <div class="col-lg-3 mt-3 right">
                    <span  class=" col-lg-12 fw-bold ">𝗘𝗡╸Language</span>
                    <input readonly value="' . $row['language'] . '" class="col-lg-12 mt-2 inputt pad wid border-white bg-transparent" name="lan">
                    
 
                    
                </div>


                <div class="col-lg-3 mt-3 left">
                    <span class="col-lg-12 mt-4 fw-bold border-white">% Percentage</span>
                    <input readonly value="' . $row['percentage'] . '" class="col-lg-12 mt-2 inputt pad wid border-white bg-transparent" name="per">
                    
                    
                </div>

                <div class="col-lg-3 mt-3 left">
                    <span  class="col-lg-12 mt-4 fw-bold">📅Passing Year</span>
                    <input readonly value="' . $row['passing_year'] . '" class="col-lg-12 mt-2 inputt pad wid border-white bg-transparent" name="pass">
                     
                    
                </div>
            </div>    
            <div class="row mt-4">

                <div class="col-lg-3 right">
                    <input readonly value="' . $row['wing'] . '" class="col-lg-11 inputt mar border-white bg-transparent wid border-top-0 border-start-0 border-end-0 text-white" name="wing" type="text" placeholder="Wing/Flat no">
                    
                </div>

                <div class="col-lg-3 right">
                    <input readonly value="' . $row['building'] . '" class="col-lg-11 inputt mar wid border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white " name="build" type="text" placeholder="Building/Society">
                    
                </div>

                <div class="col-lg-3 left">
                    <input readonly value="' . $row['area'] . '" class="col-lg-11 inputt mar border-white bg-transparent wid border-top-0 border-start-0 border-end-0 text-white" name="area" type="text" placeholder="Area">
                </div>

                <div class="col-lg-3 left">
                    <input readonly value="' . $row['city'] . '" class="col-lg-11  wid  inputt mar border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" name="city" type="text" placeholder="City">   
                       
                </div>
            </div>    

            <div class="row mt-3">
                <div class="col-lg-6 bigright">
                    <input readonly value="' . $row['landmark'] . '" class="col-lg-12 inputt mar border-white bg-transparent wid border-top-0 border-start-0 border-end-0 text-white" name="land" type="text" placeholder="Landmark">
                    
                </div>

                <div class="col-lg-6 bigleft">
                    <input readonly value="' . $row['pincode'] . '" class="col-lg-12 inputt mar border-white wid bg-transparent border-top-0 border-start-0 border-end-0 text-white" name="pin" type="text%" placeholder="Enter PIN code">
                    
                </div>
            </div>    

            <div class="row mt-3">    
                <div class="col-lg-3 right "> 
                    <span class="col-lg-12 fw-bold ">🎂Date of Birth</span>

                    <input readonly value="' . $row['dob'] . '" class="col-lg-12  mt-2 inputt border-white mar  bg-transparent border-top-0 wid border-start-0 border-end-0 text-white " name="dob" type="date">
                </div>    

                <div class="col-lg-3 right">  
                    <span class="col-lg-12 mt-4 fw-bold">🩸Blood Group</span>
                    <input readonly value="' . $row['blood_grp'] . '" class="col-lg-12 mt-2 inputt pad wid  border-white bg-transparent" name="bg">
                    
            
                </div>    

                <div class="col-lg-3 left">
                    <span class="col-lg-12 mt-4 fw-bold">🌐Country</span>
                    <input readonly value="' . $row['country'] . '" class="col-lg-12 mt-2 inputt pad border-white wid  mt-1 bg-transparent" name="country">
                                  
            
            
                </div>

                <div class="col-lg-3 left">
                    <span class="col-lg-12 mt-1  b pad fw-bold bl ">🌐State</span>   

                    <input readonly value="' . $row['state'] . '" class="col-lg-12 mt-1 inputt pad border-white wid bg-transparent" name="state">
                   
                            </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 bigright">
                    <input readonly value="' . $row['refrence'] . '" class="col-lg-12  mar wid border-white inputt bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="name" name="ref" placeholder="Refrence By">   
                </div>

                <div class="col-lg-6 mb-4 left">
                <input readonly value="' . $row['image'] . '" class="col-lg-12 inputt mar wid border-white bg-transparent border-top-0 border-start-0 border-end-0 text-white" name="photo" type="file" accept="image/jpeg,image/jpg"  placeholder="Upload Your Photo">
                </div>

            </div>
          
                
            <br><br>
            
        </form>';
            }

            echo ' </body>
</html>';
        } catch (Exception $e) {
            echo $e;
        }
        $this->prev=$this->offset+1;
        $this->next=$this->offset-1;
        
        if($this->offset>0)
        {
            echo '<a href="offset"?'.$this->prev.' class="rounded  btn border-white" value="prev">';
        }
        if($this->offset + 1 < $this->total)
        {
            echo ' <a href="offset"?'.$this->next.' class="rounded btn mt-4 border-white" value="next">';
        }
    }
}

$obj = new fetching();
$obj->getdata();
?>
