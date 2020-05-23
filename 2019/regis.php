
<!DOCTYPE html>
<html lang="en">
<head>
    <title>registra utente nuovo</title>
</head>
<style>
h1{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
div{
    position: relative;
    text-align: center;
    position: relative;
    border: ridge rgb(134, 134, 134) 5px;
    border-radius: 20px;
    left: 30%;
    width:30%;
    margin-top: 5%;
} 
input{
    margin: 2%;
    text-align: center;
    width: 80%;
    height: 30px;
    border: none;
    border-bottom: solid gray 2px;
    border-radius: 10px;
}
.reg{
    height:40px;
    font-size: larger;
    background-color: white;
    border: none;
    box-shadow: 3px 3px 6px 3px;
    transition: 1s;
    margin-bottom: 80px;
}
.log:hover{
    transform: scale(1.05);
    box-shadow: 3px 3px 5px 2px;
}
p{
    position: absolute;
    height: 30px;
    line-height: 30px;
    vertical-align: middle;
    bottom: 0;
    right: 0;
}
a{
    text-decoration: none; 
    transition: 2s;
}
a:hover{
    color: brown;
    font-size: 110%;
}
</style>
<body>
    <div>
<h1> Registrazione utente nuovo </h1>
    <form action="regis.php" method="POST">
            <input type="text"  placeholder="name" name="nome">
            <input type="text"  placeholder="cognome" name="cognome">
            <input type="text"  placeholder="documento" name="documento">
            <input type="text"  placeholder="user name"name="usr">
            <input type="text" placeholder="passwd" name="password">
            <input class="reg" type="submit" value="Register" name="clik">  <br>
    </form>
<p>se hai già registrato <a href="login.html"><b>Clicca qua!</b></a></p>
</div>

</body>
</html>
<?php
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "2019";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
//prendere variabile dal form di html
if(isset($_POST["clik"])){
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$documento=$_POST['documento'];
$password=$_POST['password'];
$usr=$_POST['usr'];
         //inserimento di dati
        
$insert = "INSERT INTO `visitatore`( `nome`, `cognome`, `documento`)  VALUES  ('$nome' ,'$cognome' ,'$documento') ";
$insert1="INSERT INTO `bilietto`(`usr`, `password`)VALUES('$usr', '$password')";
                     //se dati salvata in data base
if($sql->query($insert)&&$sql->query($insert1)===true){
 echo "<h4 class='info'>salvato i dati</h4>";
 }else{
   echo "errore".$insert."<br>".$sql->$insert;
}
                
}
$sql->close();
?>

