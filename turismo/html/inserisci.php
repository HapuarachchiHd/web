
<html>
<head>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div>
    <h2>Inserimento</h2>
  <form action="inserisci.php" method="POST">
  <input type="text" placeholder="nome del categoria" name="nome" >
  <input type="text" placeholder="indirizzo" name="indirizzo" >
  <input type="date" id="giorno" name="giorno">
  <div class="N">
  <h1>voto per il sito;</h1>
 1 <input type="radio" placeholder="voto" name="voto" value="1">
 2 <input type="radio" placeholder="voto" name="voto" value="2">
 3 <input type="radio" placeholder="voto" name="voto" value="3">
 4 <input type="radio" placeholder="voto" name="voto" value="4">
 5 <input type="radio" placeholder="voto" name="voto" value="5">
   <input type="submit" value="visit" name="categoria">
</form>
</div>
</div>


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
//if($poi="poii"){
if(isset($_POST["categoria"])){
    $nome= $_POST['nome'];
    $indirizzo=$_POST['indirizzo'];
    $voto=$_POST['voto'];
    $giorno=$_POST['giorno'];
//prendere variabile dal form di html
    if($nome && $indirizzo && $voto && $giorno){
        //inserimento di dati
        $insert = "INSERT INTO `page`( `nome`, `indirizzo`, `voto`, `giorno`)  VALUES  ('$nome' ,'$indirizzo','$voto','$giorno' ) ";

        //se dati salvata in data base
        if($sql->query($insert)===true){
            echo "<h4 class='info'>salvato i dati</h4>";
        }else{
            echo "errore".$insert."<br>".$sql->$insert;
        }
    }
    else{
        echo "<h4 class='info'>Inserisci tutti i valori!</h4>";
    }
}
$sql->close();

?>

</body>
</html>