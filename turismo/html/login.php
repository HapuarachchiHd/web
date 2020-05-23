
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
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
        .menu{
            text-align: center;
            position: absolute;
            width: 50%;
            left: 25%;
            top: 25%;
        }
        ul{
            list-style: none;
        }
        li{
            font-size: larger;
            height: 40px;
            line-height: 40px;
            vertical-align: middle;
            margin: 4%;
            border-top: solid rgb(228, 227, 227) 2px;
            border-bottom: solid rgb(68, 66, 66) 2px;
            border-radius: 15px;
            transition: 250ms;
        }
        li:hover{
            background-image:repeating-linear-gradient(silver, white);
            border-top: solid rgb(68, 66, 66) 2px;
            box-shadow: rgb(173, 171, 171) 4px 7px 10px 1px;
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <ul class='menu'>
        <a href='inserisci.php'><li>Inserisci</li></a>
        <a href='cerco.html'><li>Visualizza</li></a>
        <a href='logout.php'><li>logout</li></a>
       
    </ul>
</body>
</html>";
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

