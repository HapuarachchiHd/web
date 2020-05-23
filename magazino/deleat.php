 
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
$deleat=$_POST['deleat'];
$table=$_POST['table'];
$campo=$_POST['campo'];
         //inserimento di dati
$insert = "DELETE FROM '$table' WHERE '$campo'='$deleat' ";
                     //se dati salvata in data base
if($sql->query($insert)===true){
    echo "elemento cancellato";
}else{
    echo "errore".$insert."<br>".$sql->$insert;
}
$sql->close();
?>

