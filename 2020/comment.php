<?php


//DB details
$hostname     = 'localhost';
$username = 'root';
$passwd = '';
$dbname     = '2020';

//Create connection and select DB
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());
}

if(isset($_POST["click"])){
    $commento=$_POST ['commento'];
    $insert1 ="INSERT INTO `commento`( `commento`) VALUES('$commento' )";
    //Get image data from database
    $sql->query($insert1);
}

if(isset($_GET["del"])){
    $id = $_GET['del'];
    $delete = "DELETE FROM `commento` WHERE `idc` = '$id';";
    $sql->query($delete);
}

$insert ="SELECT `idc`, `commento` FROM `commento` ";

$result=mysqli_query($sql,$insert);  //se connesso resulta

if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
        echo "<ul class='collection'>";
    while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le camp
        echo"<li class='collection-item'><div>".$row ['commento']."<a href='prova.php?del=".$row['idc']."' class='secondary-content'><i class='material-icons'>close</i></a></div></li>";     
    }
    echo "</ul>";
} 

$sql->close();

?>
