
<html>
<head>
    <link rel="stylesheet" href="form.css">
    <style>
h1{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
div{
    position: relative;
    text-align: center;
    border: ridge  5px;
    left: 30%;
    width:30%;
    margin-top: 5%;
} 
input{
    margin: 2%;
  
    width: 80%;
    height: 30px;
    border: none;
    border-bottom: solid gray 2px;
    border-radius: 10px;
}
p{
    position: absolute;
    height: 30px;
    line-height: 30px;
    vertical-align: middle;
    bottom: 0;
    right: 0;
}
a{
    text-decoration: none; 
    transition: 2s;
}
a:hover{
    color: brown;
    font-size: 110%;
}
      </style>
</head>
<body>

    
  <div class="N">
  <h2>Inserimento</h2>
  <form action="valutazione.php" method="POST">
  <h1>voto per il sito;</h1>
  <input type="radio" placeholder="voto" name="voto" value="1">1
 <input type="radio" placeholder="voto" name="voto" value="2">2
 <input type="radio" placeholder="voto" name="voto" value="3">3
 <input type="radio" placeholder="voto" name="voto" value="4">4
 <input type="radio" placeholder="voto" name="voto" value="5">5
<input type="submit" value="visit" name="visit">
</form>
<br>
<p>Per tornare indietro<a href="prova.php"><b>Clicca qua!</b></a></p>
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

    $voto=$_POST['voto'];
//prendere variabile dal form di html
        //inserimento di dati
        $insert1 = "INSERT INTO `voto`( `voto`) VALUES ('$voto')";
    
        //se dati salvata in data base
        if($sql->query($insert1)===true){
            echo "<h4 class='info'>salvato i dati</h4>";
        }else{
            echo "errore".$insert1."<br>".$sql->$insert;
        }
    
    
}
$sql->close();

?>
</body>
</html>