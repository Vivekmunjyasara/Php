<?php

class accept_data {

    public $fname, $mname, $lname, $phone, $email, $gen, $eqa, $lan, $per, $pass, $wing, $build, $area, $city, $land, $pin, $dob, $bg, $country, $state, $ref, $img;
    public $datapdo, $localhost, $dbname, $con, $query,$target_dir,$target_file,$imageFileType,$stmt;

    function upload_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";
        
        try {
           if (isset($_FILES['photo'])) 
           {
                $this->target_dir = "C:\form_image/uploads/";
                $this->target_file = $this->target_dir . basename($_FILES["photo"]["name"]);
                $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
           }
           $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;","root","");
             $this->stmt =$this->datapdo->prepare("INSERT INTO admission_form (image) VALUES ($this->target_file)");
             $this->stmt->bindParam('image','?');
             $this->stmt->execute();
    
             
            $this->query="insert into admission_form(first_name,middle_name, last_name, phone, email, gender, education, language, percentage, passing_year, wing, building, area, city, landmark, pincode, dob, blood_grp, country, state, refrence) values('".$this->fname."','".$this->mname."','".$this->lname."',".$this->phone.",'".$this->email."','".$this->gen."','".$this->eqa."','".$this->lan."',".$this->per.",".$this->pass.",'".$this->wing."','".$this->build."','".$this->area."','".$this->city."','".$this->land."',".$this->pin.",'".$this->dob."','".$this->bg."','".$this->country."','".$this->state."','".$this->ref."')";
            $this->datapdo->exec($this->query);  
           
        }           
        catch (Exception $e) 
            {
            echo $e;
            }
    }
    function read_data() {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
        $this->fname =empty(filter_input(INPUT_POST,'fname', FILTER_SANITIZE_SPECIAL_CHARS))?"NO NAME":filter_input(INPUT_POST,'fname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->mname = empty(filter_input(INPUT_POST,'mname', FILTER_SANITIZE_SPECIAL_CHARS))?"NO NAME":filter_input(INPUT_POST,'mname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lname = empty(filter_input(INPUT_POST,'lname', FILTER_SANITIZE_SPECIAL_CHARS))?"NO NAME":filter_input(INPUT_POST,'lname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->phone = empty(filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT))?"NO NUMBER":filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT);
        $this->email = empty(filter_input(INPUT_POST,'ema', FILTER_SANITIZE_EMAIL))?"NO EMAIL":filter_input(INPUT_POST,'ema', FILTER_SANITIZE_EMAIL);
        $this->gen = empty(filter_input(INPUT_POST,'gender', FILTER_SANITIZE_SPECIAL_CHARS))?"NO GENDER ENTERED":filter_input(INPUT_POST,'gender', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->eqa = empty(filter_input(INPUT_POST,'eq', FILTER_SANITIZE_STRING))?"EDUCATION NOT SELECTED":filter_input(INPUT_POST,'eq', FILTER_SANITIZE_STRING);
        $this->lan =empty(filter_input(INPUT_POST,'lan', FILTER_SANITIZE_STRING))?"LANGUAGE NOT SELECTED":filter_input(INPUT_POST,'lan', FILTER_SANITIZE_STRING); 
        $this->per = empty(filter_input(INPUT_POST,'per', FILTER_SANITIZE_NUMBER_INT))?"PERCENTAGE NOT SELECT":filter_input(INPUT_POST,'per', FILTER_SANITIZE_NUMBER_INT);
        $this->pass = empty(filter_input(INPUT_POST,'pass', FILTER_SANITIZE_NUMBER_INT))?"PASSING YEAR NOT SELECTED":filter_input(INPUT_POST,'pass', FILTER_SANITIZE_NUMBER_INT);
        $this->wing = empty(filter_input(INPUT_POST,'wing', FILTER_SANITIZE_SPECIAL_CHARS))?"WING PENDING":filter_input(INPUT_POST,'wing', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->build = empty(filter_input(INPUT_POST,'build', FILTER_SANITIZE_SPECIAL_CHARS))?"BUILDING PENDING":filter_input(INPUT_POST,'build', FILTER_SANITIZE_SPECIAL_CHARS);      
        $this->area = empty(filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS))?"AREA PENDING":filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->city = empty(filter_input(INPUT_POST,'city', FILTER_SANITIZE_SPECIAL_CHARS))?"CITY PENDING":filter_input(INPUT_POST,'city', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->land = empty(filter_input(INPUT_POST,'land', FILTER_SANITIZE_SPECIAL_CHARS))?"LAND PENDING":filter_input(INPUT_POST,'land', FILTER_SANITIZE_SPECIAL_CHARS);
       $this->pin = empty(filter_input(INPUT_POST,'pin', FILTER_SANITIZE_NUMBER_INT))?"NO PINCODE":filter_input(INPUT_POST,'pin', FILTER_SANITIZE_NUMBER_INT);
        $this->dob = empty(filter_input(INPUT_POST,'dob', FILTER_SANITIZE_SPECIAL_CHARS))?"NO DOB":filter_input(INPUT_POST,'dob', FILTER_SANITIZE_SPECIAL_CHARS);
       $this->bg = empty(filter_input(INPUT_POST,'bg', FILTER_SANITIZE_SPECIAL_CHARS))?"NO BLOOD GROUP SELECTED":filter_input(INPUT_POST,'bg', FILTER_SANITIZE_SPECIAL_CHARS);
       $this->country = empty(filter_input(INPUT_POST,'country', FILTER_SANITIZE_SPECIAL_CHARS))?"COUNTRY NOT SELECTED":filter_input(INPUT_POST,'country', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->state = empty(filter_input(INPUT_POST,'state', FILTER_SANITIZE_SPECIAL_CHARS ))?"STATE NOT SELECTED":filter_input(INPUT_POST,'state', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->ref = empty(filter_input(INPUT_POST,'ref', FILTER_SANITIZE_SPECIAL_CHARS))?"NO REFERENCE":filter_input(INPUT_POST,'ref', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->img= $_POST['photo'];
        }
        }
    function view_data(){
        echo $this->fname;
        echo "<br>";
        echo $this->mname;
        echo "<br>";
        echo $this->lname;
        echo "<br>";
        echo $this->phone;
        echo "<br>";
        echo $this->email;
        echo "<br>";
        echo $this->gen;
        echo "<br>";
        echo $this->eqa;
        echo "<br>";
        echo $this->lan;
        echo "<br>";
        echo $this->per;
        echo "<br>";
        echo $this->pass;
        echo "<br>";
        echo $this->wing;
        echo "<br>";
        echo $this->build;
        echo "<br>";
        echo $this->area;
        echo "<br>";
        echo $this->city;
        echo "<br>";
        echo $this->land;
        echo "<br>";
        echo $this->pin;
        echo "<br>";
        echo $this->dob;
        echo "<br>";
        echo $this->bg;
        echo "<br>";
        echo $this->country;
        echo "<br>";
        echo $this->state;
        echo "<br>";
        echo $this->ref;
        echo "<br>";
        echo $this->img;
        echo "<br>";
    }
}
$acpt_data = new accept_data();
$acpt_data->read_data();
$acpt_data->view_data();
$acpt_data->upload_data();
?>

