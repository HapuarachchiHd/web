<?php
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "shehani";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
//prendere variabile dal form di html
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$password=$_POST['password'];
$user=$_POST['user'];
         //inserimento di dati
$insert = "INSERT INTO `registro`( `nome`, `cognome`, `user`,`password`) VALUES  ('$nome' ,'$cognome' ,'$user','$password') ";
                     //se dati salvata in data base
if($sql->query($insert)===true){
    echo "salvato i dati";
}else{
    echo "errore".$insert."<br>".$sql->$insert;
}
echo "<a class='button'  href='http://localhost/progetto/home.php'><button  type='button' class='btn btn-primary'>HOME PAGE</button></a>";

$sql->close();
?>


<html>
<body>
<center>


<a class="button"  href='http://localhost/A/main.html'><button>home</button></a>
<br>

</center>
</body>
</html>
