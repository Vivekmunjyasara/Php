<?php
class accept_data {

    public $fname, $mname, $lname, $phone, $email, $gen, $eqa, $lan, $per, $pass, $wing, $build, $area, $city, $land, $pin, $dob, $bg, $country, $state, $ref, $photo;
    public $datapdo;
    function upload_data() {
        try{
           $this->datapdo=new PDO("","","");
        } catch (Exception $e) {
            console.log("pdo not found");
        }
        
        function verify_data()
        {
            
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
        $this->gen = empty(filter_input(INPUT_POST,'gen', FILTER_SANITIZE_SPECIAL_CHARS))?"NO GENDER ENTERED":filter_input(INPUT_POST,'gen', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->eqa = empty(filter_input(INPUT_POST,'eq', FILTER_SANITIZE_STRING))?"EDUCATION NOT SELECTED":filter_input(INPUT_POST,'eq', FILTER_SANITIZE_STRING);
        $this->lan =empty(filter_input(INPUT_POST,'lan', FILTER_SANITIZE_STRING))?"LANGUAGE NOT SELECTED":filter_input(INPUT_POST,'lan', FILTER_SANITIZE_STRING); empty(filter_input(INPUT_POST,'lan', FILTER_SANITIZE_SPECIAL_CHARS))?"NO NAME":filter_input(INPUT_POST,'fname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->per = empty(filter_input(INPUT_POST,'per', FILTER_SANITIZE_NUMBER_INT))?"PERCENTAGE NOT SELECT":filter_input(INPUT_POST,'per', FILTER_SANITIZE_NUMBER_INT);
        $this->pass = empty(filter_input(INPUT_POST,'pass', FILTER_SANITIZE_NUMBER_INT))?"PASSING YEAR NOT SELECTED":filter_input(INPUT_POST,'pass', FILTER_SANITIZE_NUMBER_INT);
        $this->wing = empty(filter_input(INPUT_POST,'wing', FILTER_SANITIZE_SPECIAL_CHARS))?"WING PENDING":filter_input(INPUT_POST,'wing', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->build = empty(filter_input(INPUT_POST,'build', FILTER_SANITIZE_SPECIAL_CHARS))?"BUILDING PENDING":filter_input(INPUT_POST,'build', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->area = empty(filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS))?"AREA PENDING":filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->city = empty(filter_input(INPUT_POST,'city', FILTER_SANITIZE_SPECIAL_CHARS))?"CITY PENDING":filter_input(INPUT_POST,'city', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->land = empty(filter_input(INPUT_POST,'land', FILTER_SANITIZE_SPECIAL_CHARS))?"LAND PENDING":filter_input(INPUT_POST,'land', FILTER_SANITIZE_SPECIAL_CHARS);
       $this->pin = empty(filter_input(INPUT_POST,'pin', FILTER_SANITIZE_NUMBER_INT))?"NO PINCODE":filter_input(INPUT_POST,'pin', FILTER_SANITIZE_NUMBER_INT);
        $this->dob = empty(filter_input(INPUT_POST,'dob', FILTER_SANITIZE_SPECIAL_CHARS))?"NO DOB":filter_input(INPUT_POST,'dob', FILTER_SANITIZE_SPECIAL_CHARS);
       $this->bg = empty(filter_input(INPUT_POST,'bg', FILTER_SANITIZE_STRING))?"NO BLOOD GROUP SELECTED":filter_input(INPUT_POST,'bg', FILTER_SANITIZE_STRING);
       $this->country = empty(filter_input(INPUT_POST,'country', FILTER_SANITIZE_STRING))?"COUNTRY NOT SELECTED":filter_input(INPUT_POST,'country', FILTER_SANITIZE_STRING);
        $this->state = empty(filter_input(INPUT_POST,'state', FILTER_SANITIZE_STRING))?"STATE NOT SELECTED":filter_input(INPUT_POST,'state', FILTER_SANITIZE_STRING);
        $this->ref = empty(filter_input(INPUT_POST,'ref', FILTER_SANITIZE_SPECIAL_CHARS))?"NO REFERENCE":filter_input(INPUT_POST,'ref', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->photo = empty(filter_input(INPUT_POST,'photo', FILTER_SANITIZE_SPECIAL_CHARS))?"PHOTO NOT SELECTED":filter_input(INPUT_POST,'photo', FILTER_SANITIZE_SPECIAL_CHARS);
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
        echo $this->photo;
        echo "<br>";
    }
}
$acpt_data = new accept_data();
$acpt_data->read_data();
$acpt_data->view_data();
?>

