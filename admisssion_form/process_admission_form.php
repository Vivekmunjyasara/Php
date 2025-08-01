<html>
    <head>
        <title> 
        </title>
        <style>
            body{
                background: linear-gradient(45deg,#fffde4,#005aa7);
                color: black;
                text-align: center;
                padding-top: 20%;
            }
            .container{
                 background: linear-gradient(45deg,#005aa7,#fffde4);
            }
            .inner{
                border: 2px dotted black;
                display: block;
            }
            h1{
                font-size: 70px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>
<?php

class accept_data {

    public $fname, $mname, $lname, $phone, $email, $gen, $eqa, $lan, $per, $pass, $wing, $build, $area, $city, $land, $pin, $dob, $bg, $country, $state, $ref, $img;
    public $datapdo, $localhost, $dbname, $con, $query, $target_dir, $target_file,$imageFileType,$uploadok,$check,$done,$new_email_name,$email_name;

    function upload_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";

        $this->target_dir = "C:\\xampp\\htdocs\\Php\\admisssion_form\\";
        $this->target_file = $this->target_dir . basename($_FILES["photo"]["name"]);
        $this->uploadok = 1;
        $this->new_email_name=$_POST['ema'];
        $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
        $this->email_name=$this->new_email_name.".".$this->imageFileType;
        

        if (isset($_POST["submit"])) {
            $this->check = getimagesize($_FILES["photo"]["tmp_name"]);
            if ($this->check !== false) {
//                echo "File is an image - " . $this->check["mime"] . ".";
                $this->uploadok = 1;
            } else {
//                echo "File is not an image.";
                $this->uploadok = 0;
            }
        }

        if (file_exists($this->target_file)) {
//            echo "Sorry, file already exists.";
            $this->uploadok = 0;
        }

        if ($this->uploadok == 0) {
           // echo "Sorry, your file was not uploaded.";
         // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $this->email_name)) {
              //  echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
            } else {
               // echo "Sorry, there was an error uploading your file.";
            }
        }

        try {
            
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
            $this->query = "insert into admission_form(first_name,middle_name, last_name, phone, email, gender, education, language, percentage, passing_year, wing, building, area, city, landmark, pincode, dob, blood_grp, country, state, refrence,image) values('" . $this->fname . "','" . $this->mname . "','" . $this->lname . "'," . $this->phone . ",'" . $this->email . "','" . $this->gen . "','" . $this->eqa . "','" . $this->lan . "'," . $this->per . "," . $this->pass . ",'" . $this->wing . "','" . $this->build . "','" . $this->area . "','" . $this->city . "','" . $this->land . "'," . $this->pin . ",'" . $this->dob . "','" . $this->bg . "','" . $this->country . "','" . $this->state . "','" . $this->ref . "','". $this->email_name ."')";
            $this->datapdo->exec($this->query);
        } catch (Exception $e) {
            echo $e;
        }
    }

    function read_data() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->fname = empty(filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->mname = empty(filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->lname = empty(filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->phone = empty(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT)) ? "NO NUMBER" : filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
            $this->email = empty(filter_input(INPUT_POST, 'ema', FILTER_SANITIZE_EMAIL)) ? "NO EMAIL" : filter_input(INPUT_POST, 'ema', FILTER_SANITIZE_EMAIL);
            $this->gen = empty(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO GENDER ENTERED" : filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->eqa = empty(filter_input(INPUT_POST, 'eq', FILTER_SANITIZE_STRING)) ? "EDUCATION NOT SELECTED" : filter_input(INPUT_POST, 'eq', FILTER_SANITIZE_STRING);
            $this->lan = empty(filter_input(INPUT_POST, 'lan', FILTER_SANITIZE_STRING)) ? "LANGUAGE NOT SELECTED" : filter_input(INPUT_POST, 'lan', FILTER_SANITIZE_STRING);
            $this->per = empty(filter_input(INPUT_POST, 'per', FILTER_SANITIZE_NUMBER_INT)) ? "PERCENTAGE NOT SELECT" : filter_input(INPUT_POST, 'per', FILTER_SANITIZE_NUMBER_INT);
            $this->pass = empty(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_NUMBER_INT)) ? "PASSING YEAR NOT SELECTED" : filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_NUMBER_INT);
            $this->wing = empty(filter_input(INPUT_POST, 'wing', FILTER_SANITIZE_SPECIAL_CHARS)) ? "WING PENDING" : filter_input(INPUT_POST, 'wing', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->build = empty(filter_input(INPUT_POST, 'build', FILTER_SANITIZE_SPECIAL_CHARS)) ? "BUILDING PENDING" : filter_input(INPUT_POST, 'build', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->area = empty(filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS)) ? "AREA PENDING" : filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->city = empty(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS)) ? "CITY PENDING" : filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->land = empty(filter_input(INPUT_POST, 'land', FILTER_SANITIZE_SPECIAL_CHARS)) ? "LAND PENDING" : filter_input(INPUT_POST, 'land', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->pin = empty(filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_NUMBER_INT)) ? "NO PINCODE" : filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_NUMBER_INT);
            $this->dob = empty(filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO DOB" : filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->bg = empty(filter_input(INPUT_POST, 'bg', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO BLOOD GROUP SELECTED" : filter_input(INPUT_POST, 'bg', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->country = empty(filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS)) ? "COUNTRY NOT SELECTED" : filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->state = empty(filter_input(INPUT_POST, 'state', FILTER_SANITIZE_SPECIAL_CHARS)) ? "STATE NOT SELECTED" : filter_input(INPUT_POST, 'state', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->ref = empty(filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO REFERENCE" : filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS);
            
        }
    }

    function view_data() {
        
        echo "<h1 class=inner container>THANK YOU FOR SUBMITTING FORM</h1>"; 
    }
}

$acpt_data = new accept_data();
$acpt_data->read_data();
$acpt_data->upload_data();
$acpt_data->view_data();

?>

