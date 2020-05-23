
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
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['password'])){
$user = $_POST['user'];
$password = $_POST['password'];
//DB Connection
$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
//Select DB From database
$db = mysqli_select_db($conn, 'shehani') or die("databse error");
//Selecting database
$query = mysqli_query($conn, "SELECT `password`, `user` FROM `registro` WHERE password='$password' AND user='$user'");
$numrows = mysqli_num_rows($query);
if($numrows !=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbusername=$row['user'];
$dbpassword=$row['password'];
}
if($user == $dbusername && $password == $dbpassword && $user != "amministratore" && $password != "amministratore")
{
session_start();
$_SESSION['sess_user']=$user;
//Redirect Browser
echo "ciao";

//visualizza le dati
echo "<html>";
echo "<table style='width:50%'>";
echo"
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 45px;
}
</style>";

$insert ="SELECT  articolo, prezzodivendita, reparti, categoria ,scanto
FROM tdarticoli, tdcategoria, tdreparti
WHERE idreparti=ksreparti AND idcategoria=kscategoria
ORDER BY reparti,categoria,articolo,scanto; ";
$result=mysqli_query($sql,$insert);  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
    echo"<body style='background-color:pink;'><tr>
    <th>articolo</th>
    <th>prezzodivendita </th>
    <th>reparti</th>
    <th>categoria</th>
    <th>sconto</th>
  </tr>
  <tr>  ";
while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
   
echo "<tr><td>".$row["articolo"]."</td><td>"."".$row["prezzodivendita"]."</td><td>"."".$row["reparti"]."</td><td>"."".$row["categoria"]."</td><td>"."".$row["scanto"]."</td>"."</tr>";
}
} else{ echo" non ha trovato nulla"; }  //se no stampa messaggio
echo "</table></body>";
echo "</html>";


}
elseif( $user == "amministratore" && $password == "amministratore"){ 
    
    echo"<style>
    .button {
    
      padding: 25px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 26px;
      margin: 10px 12px;
    
    }
    
    </style> 
    <div style='background-color:lightblue'>  <center><a class='button'  href='http://localhost/progetto/articolo.php'><button  type='button' class='btn btn-primary'>Inserisci l'articolo</button></a>
    <br>";
    echo"   <a class='button'  href='http://localhost/progetto/vizualizza.php'><button  type='button' class='btn btn-primary'>Visualizza tutte le tabelle</button></a>
    <br>";
    echo"   <a class='button'  href='http://localhost/progetto/client.php'><button  type='button' class='btn btn-primary'>Inserisci tabella acquisti</button></a>
    <br> <a class='button'  href='http://localhost/progetto/home.php'><button  type='button' class='btn btn-primary'>HOME PAGE</button></a>
    </div></center>";


} 
else{echo "non valida";}
}
else
{
echo "Required All fields!";
}
}

}
?>

