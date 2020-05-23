<html>
<body>

<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid pink;
  text-align: left;
  padding: 8px;
}

</style>


<table align="center";>
<?php
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "esercizo";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
$y=date('Y-n-j');
$r;
$insert ="SELECT giornob FROM `date1`";
$result=mysqli_query($sql,$insert);  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa

while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi

echo $row ['giornob'];

}
}

 else{ echo" non ha trovato nulla"; }  //se no stampa messaggio


$sql->close();
?>

</body></html>