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
if(isset($_POST["submit"])){
$cerco = $_POST['cerco'];
$i=0;
$somm=0;
$insert ="SELECT `id`, `nome`, `indirizzo`,voto , `giorno` FROM `page` WHERE giorno LIKE '%$cerco%' ";

$result=mysqli_query($sql,$insert );  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
    echo "<table>
    <tr>
    <th>id</th>
    <th>nome</th>
    <th>indirizzo</th>
    <th>voto </th>
    <th>giorno</th>
   
   
  </tr>";
while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
echo "
  <tr>
    <th>".$row["id"]."</th><th> ",$row["nome"]."</th><th>  ",$row["indirizzo"]."</th><th> ",$row["voto"]."</th><th> ",$row["giorno"]."</tr>";
   $somm+=$row ['voto'];
    $i++;

}
echo "<br><tr ><th>la media del voto media ;",($somm/$i),"</th></tr>";


}

 else{ echo" non ha trovato nulla"; }  //se no stampa messaggio

$sql->close();
}
?>

</table>
</body>
</html>