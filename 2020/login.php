<?php

$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "2020";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
    if(isset($_POST["submit"])){
        if(!empty($_POST['usr']) && !empty($_POST['password'])){
        $usr = $_POST['usr'];
        $password = $_POST['password'];
        
        $insert =  "SELECT  `user`, `pasword` FROM `log` WHERE user='$usr'AND pasword='$password'  ";
       $result=mysqli_query($sql,$insert);  //se connesso resulta
           
       if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
        $dbusername=$row['user'];
        $dbpassword=$row['pasword'];
                while($row=mysqli_fetch_assoc($result)){
                $dbusername=$row['user'];
                $dbpassword=$row['pasword'];
                }
                    if($usr == $dbusername && $password == $dbpassword)
                    {
                    setcookie("type",$dbusername,time()+(3600*24));
                    header("location:prova.php");
                    }

                    else
                    {
                    echo "Invalid Username or Password!";
                    }
            }
        }

    else
    {
    echo "Required All fields!";
    }

}
?>

