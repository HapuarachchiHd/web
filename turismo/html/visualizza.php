<html>
  <head>
  <link rel="stylesheet" href="tableVisiti.css">
  </head>
<body>

<?php
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "turismo";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
echo "<table>";


$insert ="select  nome ,indirizzo  from poi  ";
$result=mysqli_query($sql,$insert);  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
  echo"<tr>
    <th>nome </th>
    <th>indirizzo</th>
    </tr>";
while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
echo "<tr><td>".$row["nome"]."</td><td>"."".$row["indirizzo"]."</td>"."</tr>";

}
}

/*
$insert1 ="SELECT nome, SUM(voto_media) FROM poi HAVING nome ='cinama'";
$result1=mysqli_query($sql,$insert1);  //se connesso resulta
if(mysqli_num_rows($result1)>0){ //controlla che tabella esiste che almeno una righa
while($row=mysqli_fetch_assoc($result1)){ //se esiste visualizza le campi
echo"<tr>
    <th>nome </th>
    <th>voto </th>
  </tr>
  <tr>  ";
  echo "<tr><td>".$row["nome"]."</td><td>"."".$row["voto_media"]."</td><td>"."</tr>";
*/



 else{ echo" non ha trovato nulla"; }  //se no stampa messaggio
echo "</table>";
$sql->close();
?>


</body>
</html>