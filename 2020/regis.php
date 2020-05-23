
<!DOCTYPE html>
<html lang="en">
<head>
    <title>registra utente nuovo</title>
    <link rel="stylesheet" href="form.css">
    
   <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div>
<h1> Registrazione utente nuovo </h1>
    <form action="regis.php" method="POST">
            <input type="text"  placeholder="name" name="nome">
            <input type="text"  placeholder="cognome" name="cognome">
            <input type="text"  placeholder="documento" name="documento">
            <input type="text"  placeholder="user name"name="usr">
            <input type="password" placeholder="passwd" name="password">
            <input class="reg" type="submit" value="Register" name="clik">  
    </form><br><br>
<p>se hai già registrato <a href="login.html"><b>Clicca qua!</b></a></p>
</div>

</body>
</html>
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
//prendere variabile dal form di html
if(isset($_POST["clik"])){
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$documento=$_POST['documento'];
$password=$_POST['password'];
$usr=$_POST['usr'];
         //inserimento di dati
        
$insert = "INSERT INTO `visitatore`( `nome`, `cognome`, `documento`)  VALUES  ('$nome' ,'$cognome' ,'$documento') ";
$insert1="INSERT INTO `log`(`user`, `pasword`) VALUES('$usr', '$password')";
                     //se dati salvata in data base
if($sql->query($insert)&&$sql->query($insert1)===true){
 echo "<h4 class='info'>salvato i dati</h4>";
 }
 else{
   echo "errore".$insert."<br>".$sql->$insert;
}
                
}
$sql->close();
?>

