<?php

include "../Model/model.php";
?>
<?php

if(isset($_POST["registration"]))
{
    
        $name=$_POST["name"];
        $email=$_POST["email"];
        $uname=$_POST["username"];
        $age=$_POST["age"];
        $gndr=$_POST["gender"];
        $phn=$_POST["phn"];
        $add=$_POST["address"];
        $pass=$_POST["password"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($name, $email, $uname, $age, $gndr, $phn, $add, $pass, "Customer", $conobj);
        $mydb->closecon($conobj);
}

?>