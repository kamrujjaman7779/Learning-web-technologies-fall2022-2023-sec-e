<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="E-ticket";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function InsertData($fname, $email, $uname, $age, $gender, $phn, $adrs, $pass, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename (fname, email, uname, age, gender, phn, adrs, pass) 
        VALUES ('$fname', '$email', '$uname', '$age', '$gender', '$phn', '$adrs',' $pass')";
        if($conn->query($sqlstr)===TRUE)
        {
            header("location: ../View/login.php");
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }
    function CheckUser($uname,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE uname='$uname' AND pass='$pass'");
        return $result;
    }

    function closecon($conn)
    {
        $conn->close();
    }
}
?>