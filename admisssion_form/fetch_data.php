<?php
class fetching {
   
    public $localhost,$dbname,$conn,$query,$datapdo,$result;

    function getdata() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";

        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
            $this->query = "SELECT first_name,middle_name,last_name,phone,email FROM admission_form";
            $this->result = $this->datapdo->query($this->query);
            if ($this->result->rowCount() > 0) {
                echo '<table border align=center>';
                echo '<tr><th>'."Name".'</th>'.'<th>'."Phone".'</th>'.'<th>'."Email".'</th></tr>';
                while ($row = $this->result->fetch( PDO :: FETCH_ASSOC)) {
                   echo '<td>'.$row["first_name"] . " " . $row["middle_name"] ." ". $row["last_name"].'</td>'.'<td>'. $row["phone"] .'</td>'.'<td>'. $row["email"]."</td>".'<td>'.'<a href="another.php">'."More details".'</a>'.'</td>'.'</tr>'. "<br>";  
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