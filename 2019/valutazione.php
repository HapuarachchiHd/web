
<html>
<head>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div>
    <h2>Inserimento</h2>
 
  <div class="N">
  <form action="valutazione.php" method="POST">
  <h1>voto per il sito;</h1>
 1 <input type="radio" placeholder="voto" name="voto" value="1">
 2 <input type="radio" placeholder="voto" name="voto" value="2">
 3 <input type="radio" placeholder="voto" name="voto" value="3">
 4 <input type="radio" placeholder="voto" name="voto" value="4">
 5 <input type="radio" placeholder="voto" name="voto" value="5">
 <textarea rows="10" cols="80" maxlength="80" placeholder="per consiglio" name="commento"></textarea>
<input type="submit" value="visit" name="visit">
</form>
</div>
</div>


<?php

$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "2019";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}


//if($poi="poii"){
if(isset($_POST["visit"])){

    $commento=$_POST['commento'];
    
    $voto=$_POST['voto'];
//prendere variabile dal form di html
 
        //inserimento di dati
        $insert1 = "INSERT INTO `voto`( `voto`) VALUES ('$voto')";
        $insert ="INSERT INTO `commento`( `commento`) VALUES ('$commento')";


        //se dati salvata in data base
        if($sql->query($insert)&&$sql->query($insert1)===true){
            echo "<h4 class='info'>salvato i dati</h4>";
        }else{
            echo "errore".$insert."<br>".$sql->$insert;
        }
    
    
}
$sql->close();

?>

</body>
</html>