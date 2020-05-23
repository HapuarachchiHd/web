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

//visualizza le dati
echo "<html>";
echo "<table style='width:10%'>";
echo"<style>table, th, td {border: 1px solid black;}</style>";

$insert ="select  nome ,cognome ,eta from dona ";
$result=mysqli_query($sql,$insert);  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
echo"<tr>
    <th>nome</th>
    <th>cognome </th>
    <th>eta</th>
  </tr>
  <tr>  ";
echo "<tr><td>".$row["nome"]."</td><td>"."".$row["cognome"]."</td><td>"."".$row["eta"]."</td>"."</tr>";
}
} else{ echo" non ha trovato nulla"; }  //se no stampa messaggio
echo "</table>";
echo "</html>";
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
