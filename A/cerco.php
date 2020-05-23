
<?php
session_start();
$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "shehani";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);
                       //proce
if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}
//prendere variabile dal form di html
$cerco=$_GET["cerco"];

         //inserimento di dati
$insert = " SELECT * FROM dona WHERE nome LIKE '%{$cerco}%'";
$result=mysqli_query($sql,$insert);  //se connesso resulta

 //controlla che tabella esiste che almeno una righa
  if(mysqli_num_rows($result)>0){     //controlla che tabella esiste che almeno una righa
while($row=mysqli_fetch_assoc($result)){
echo ($row['nome']);
 }
}
mysqli_close($sql);
?>


<html>
<body>
<center>


<a class="button"  href='http://localhost/A/main.html'><button>home</button></a>
<br>

</center>
</body>
</html>

