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
$eta=$_POST['eta'];
         //inserimento di dati
$insert = "INSERT INTO  dona (nome ,cognome ,eta )VALUES ('$nome','$cognome','$eta') ";
                     //se dati salvata in data base
if($sql->query($insert)===true){
    echo "salvato i dati";
}else{
    echo "errore".$insert."<br>".$sql->$insert;
}
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
