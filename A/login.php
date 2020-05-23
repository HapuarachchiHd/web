
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['password'])){
$user = $_POST['user'];
$password = $_POST['password'];
//DB Connection
$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
//Select DB From database
$db = mysqli_select_db($conn, 'shehani') or die("databse error");
//Selecting database
$query = mysqli_query($conn, "SELECT `password`, `user` FROM `registro` WHERE password='$password' AND user='$user'");
$numrows = mysqli_num_rows($query);
if($numrows !=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbusername=$row['user'];
$dbpassword=$row['password'];
}
if($user == $dbusername && $password == $dbpassword)
{
session_start();
$_SESSION['sess_user']=$user;
//Redirect Browser
echo "ciao";
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

