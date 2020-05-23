

<?php
$hostname     = 'localhost';
$username = 'root';
$passwd = '';
$dbname     = '2020';
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

}

$insert ="SELECT  `disney`, `descrizione` FROM `disney` ";

$result=mysqli_query($sql,$insert);  //se connesso resulta

if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
    echo "<div class='row'>";
    while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le camp
        echo"<div style='text-align:center' class='col s12 l6'>".$row ['disney']."<br>".$row ['descrizione']."</div>";      
    }
    echo "</div>";
} 
$sql->close();
?>