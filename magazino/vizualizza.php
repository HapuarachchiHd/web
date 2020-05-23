
<?php 
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "magazino";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

} 
  
    //visualizza le dati
    echo "<html>";
    echo "<table style='width:10%'>";
    echo"<style>table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px;
      }</style>";
    echo "<body style='background-color:pink;'><h1>visualizza aquisti &fornitori<h1>";
    $insert ="SELECT  idaquisto,ksarticolo,ksfornitori,articolo,costo,quantita,dataaquisto,ragionesiciale,idfornitori,indirizzo,rezidenza,partitaviva,telefono,email
    FROM tdarticoli, tbfornitori,tbaquisto
    WHERE idfornitori=ksfornitori AND idarticolo=ksarticolo
    ORDER BY articolo,dataaquisto; ";
    $result=mysqli_query($sql,$insert);  //se connesso resulta
    if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
        echo"<tr>
    <th>idaquisto</th>
    <th>ksarticolo </th>
    <th>ksfornitori</th>
    <th>articolo</th>
    <th>costo</th>
    <th>quantita</th>
    <th>dataaquisto </th>
    <th>ragionesiciale</th>
    <th>idfornitori</th>
    <th>indirizzo</th>
    <th>rezidenza</th>
    <th>partitaviva</th>
    <th>telefono</th>
    <th>email</th>
  </tr>
  <tr>  ";
    while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
  
    echo "<tr><td>".$row["idaquisto"]."</td><td>"."".$row["ksarticolo"]."</td><td>"."".$row["ksfornitori"]."</td><td>"."".$row["articolo"]."</td>".
    "<td>".$row["costo"]."</td><td>"."".$row["quantita"]."</td><td>"."".$row["dataaquisto"]."</td><td>"."".$row["ragionesiciale"]."</td>
    <td>".$row["idfornitori"]."</td><td>"."".$row["indirizzo"]."</td><td>"."".$row["rezidenza"]."</td><td>"."".$row["partitaviva"]."</td><td>"."".$row["telefono"]."</td><td>"."".$row["email"]."</td>"."</tr>";
    }








    echo "<html>";
    echo "<table style='width:100%'>";
    echo"<style>table, th, td {border: 4px solid black;}</style>";
    echo "<h1>visualizza articoli & categoria & reparthi<h1>";
    $insert ="SELECT `idarticolo`, `articolo`, `ksreparti`, `kscategoria`, `prezzodivendita`, `scanto`, `giacenza`, `sconto_max`, `sconto_min` ,idcategoria,categoria,idreparti,reparti
    FROM tdarticoli, tdcategoria,tdreparti
    WHERE idcategoria=kscategoria AND idreparti=ksreparti
    ORDER BY articolo,categoria,reparti; ";
    $result=mysqli_query($sql,$insert);  //se connesso resulta
    if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
        echo"<tr>
    <th>idarticolo</th>
    <th>idarticolo </th>
    <th>ksreparti</th>
    <th>kscategoria</th>
    <th>prezzodivendita</th>
    <th>scanto</th>
    <th>giacenza </th>
    <th>sconto_max</th>
    <th>sconto_min</th>
    <th>idcategoria</th>
    <th>categoria</th>
    <th>idreparti</th>
    <th>reparti</th>
  
  </tr>
  <tr>  ";
    while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
  
    echo "<tr><td>".$row["idarticolo"]."</td><td>"."".$row["idarticolo"]."</td><td>"."".$row["ksreparti"]."</td><td>"."".$row["kscategoria"]."</td>".
    "<td>".$row["prezzodivendita"]."</td><td>"."".$row["scanto"]."</td><td>"."".$row["giacenza"]."</td><td>"."".$row["sconto_max"]."</td>
    <td>".$row["sconto_min"]."</td><td>"."".$row["idcategoria"]."</td><td>"."".$row["categoria"]."</td><td>"."".$row["idreparti"]."</td><td>"."".$row["reparti"]."</td>"."</tr>";
    }
    }



    } else{ echo" non ha trovato nulla"; }  //se no stampa messaggio
    echo "</table> </body>";
    echo "</html>";  
    if($sql->query($insert)===true){
        echo "salvato i dati";
    }else{
        echo "errore".$insert."<br>".$sql->$insert;
    }
    echo "<html><a class='button'  href='http://localhost/progetto/home.php'><button  type='button' class='btn btn-primary'>HOME PAGE</button></a></html>";

    $sql->close();
?>


