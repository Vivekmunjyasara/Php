
<?php

class fetching {
   
    public $localhost, $dbname, $conn, $query, $datapdo, $result;

    function getdata() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";

        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
            $this->query = "SELECT first_name,middle_name,last_name,phone,email,gender,education,language,percentage,passing_year,wing,building,area,city,landmark,pincode,dob,blood_grp,country,state,refrence FROM admission_form";
            $this->result = $this->datapdo->query($this->query);
            if ($this->result->rowCount() > 0) {
                echo '<table border align=center>';
                echo '<tr><th>'."Name".'</th>'.'<th>'."Phone".'</th>'.'<th>'."Email".'</th>'.'<th>'."Gender".'</th>'.'<th>'."education".'</th>'.'<th>'."Language".'</th>'.'<th>'."Percentage".'</th>'.'<th>'."Passing_year".'</th>'.'<th>'."Wing".'</th>'.'<th>'."Bilding".'</th>'.'<th>'."Area".'</th>'.'<th>'."City".'</th>'.'<th>'."Landmark".'</th>'.'<th>'."Pincode".'</th>'.'<th>'."DoB".'</th>'.'<th>'."Blood_grp".'</th>'.'<th>'."Country".'</th>'.'<th>'."State".'</th>'.'<th>'."Reference".'</th>'.'</tr>';
                while ($row = $this->result->fetch( PDO :: FETCH_ASSOC)) {
                   echo '<td>'.$row["first_name"] . " " . $row["middle_name"] ." ". $row["last_name"].'</td>'.'<td>'. $row["phone"] .'</td>'.'<td>'. $row["email"].'</td>'.'<td>'. $row["gender"].'</td>'.'<td>'. $row["education"].'</td>'.'<td>'. $row["language"].'</td>'.'<td>'. $row["percentage"].'</td>'.'<td>'. $row["passing_year"].'</td>'.'<td>'. $row["wing"].'</td>'.'<td>'. $row["building"].'</td>'.'<td>'. $row["area"].'</td>'.'<td>'. $row["city"].'</td>'.'<td>'. $row["landmark"].'</td>'.'<td>'. $row["pincode"].'</td>'.'<td>'. $row["dob"].'</td>'.'<td>'. $row["blood_grp"].'</td>'.'<td>'. $row["country"].'</td>'.'<td>'. $row["state"].'</td>'.'<td>'. $row["refrence"].'</td>'.'</tr>'. "<br>";  
                }
                echo '</table>'; 
            } else {
                echo "0 results";
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}

$obj = new fetching();
$obj->getdata();

?>
