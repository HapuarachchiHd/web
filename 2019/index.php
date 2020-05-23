<html>
<body>
<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}
body {background-color:pink;}
button ,div{
  border: 1px solid pink;
  float: right;
  padding: 8px;
}
.show{
	display:block;
}
.hide{
    display: none; 
    float: center;
}

h1{
  text-align: center;
  color:blue;
}
</style>

<script>
function f1(){
	var vid = document.getElementById("video");
    
    vid.classList.remove("hide");
    vid.classList.add("show");
}
</script>

<h1> visitatore semplice</h1>

 
 <div class="N">
 <form action="valutazione.php" method="POST">
 <h1>grazie per il valutazione e il commento</h1>
1 <input type="radio" placeholder="voto" name="voto" value="1"><br>
2 <input type="radio" placeholder="voto" name="voto" value="2"><br>
3 <input type="radio" placeholder="voto" name="voto" value="3"><br>
4 <input type="radio" placeholder="voto" name="voto" value="4"><br>
5 <input type="radio" placeholder="voto" name="voto" value="5"><br>
<textarea rows="10" cols="80" maxlength="80" placeholder="per consiglio" name="commento"></textarea><br>
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

$insert ="SELECT urlimage ,url FROM imageb,videob ,base 
WHERE base.ksidimageB=imageb.idimageB and base.ksvideoB=videob.idvideoB";

$result=mysqli_query($sql,$insert);  //se connesso resulta
if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le camp
  if($row ['url']!='-'){
    echo"<button onclick='f1()'>clickqua per il video</button>";
  echo"<div class='hide' id='video'width='75%'>
  ".$row ['url']."</div>";}
if($row ['urlimage']){
echo "<img src=".$row ['urlimage']." width='250' height='250'><br>";
}
}
}


else{ echo" non ha trovato nulla"; }  //se no stampa messaggio
//_____________________________________________________________
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
</body></html>