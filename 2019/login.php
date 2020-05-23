
<?php
if(!isset($_COOKIE['type'])){
    header("location:login.php");
}
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "2019";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
if(isset($_POST["submit"])){
if(!empty($_POST['usr']) && !empty($_POST['password'])){
$usr = $_POST['usr'];
$password = $_POST['password'];
//DB Connection

//Selecting database
$insert =  "SELECT `usr`, `password` FROM `bilietto` WHERE usr='$usr'AND password='$password'  ";
$result=mysqli_query($sql,$insert);  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
while($row=mysqli_fetch_assoc($result)){
$dbusername=$row['usr'];
$dbpassword=$row['password'];
}
if($usr == $dbusername && $password == $dbpassword)
{
setcookie("type",$row['usr'],time()+(3600*24));
header("location:index.php");

}
}
else
{
echo "Invalid Username or Password!";
}
}
else
{
echo "Required All fields!";
}

}
?>

