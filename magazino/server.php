<?php

class cli{
private $idaquisto;
private $ksarticolo;
private $ksfornitore;
private $quantita; 
private $costo;
private $data;
private $idarticolo;
private $articolo;
private $ksreparti;
private $kscategoria;
private $prezzodivendita;
private $scanto;
private $giacenza;
private $sconto_max;
private $sconto_min;
public function dati(){
    $idaquisto=$_POST['idaquisto'];
    $ksarticolo=$_POST['ksarticolo'];
    $ksfornitori=$_POST['ksfornitori'];
    $quantita=$_POST['quantita'];
    $costo=$_POST['costo'];
    $dataaquisto=$_POST['dataaquisto'];

$hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
$username = "root";
$passwd = "";
$dbname = "magazino";
         //connezione al database
$sql = mysqli_connect($hostname,$username,$passwd,$dbname);

if(!$sql){
    die("connesione e' fallito".mysqli_connect_error());

} 
                 //inserimento di dati
 $insert = "INSERT INTO tbaquisto(idaquisto, ksarticolo,ksfornitori,quantita, costo, dataaquisto) VALUES('$idaquisto','$ksarticolo','$ksfornitori', '$quantita','$costo', '$dataaquisto') ;   ";

//prendere variabile dal form di html
                 //se dati salvata in data base
if($sql->query($insert)===true){
    echo "salvato i dati";
}else{
    echo "errore".$insert."<br>".$sql->$insert;
}
$sql->close();

}
public function tdarticolo(){
    
        $idarticolo=$_POST['idarticolo'];
        $articolo=$_POST['articolo'];
        $ksreparti=$_POST['ksreparti'];
        $kscategoria=$_POST['kscategoria'];
        $prezzodivendita=$_POST['prezzodivendita'];
        $scanto=$_POST['scanto'];
        $giacenza=$_POST['giacenza'];
        $sconto_max=$_POST['sconto_max'];
        $sconto_min=$_POST['sconto_min'];
    
    $hostname = "localhost";  //mysql -h 127.0.0.1 -u root -p
    $username = "root";
    $passwd = "";
    $dbname = "magazino";
             //connezione al database
    $sql = mysqli_connect($hostname,$username,$passwd,$dbname);
    
    if(!$sql){
        die("connesione e' fallito".mysqli_connect_error());
    
    } 
                     //inserimento di dati
     $insert = "INSERT INTO tdarticoli(idarticolo, articolo, ksreparti, kscategoria, prezzodivendita, scanto, giacenza, sconto_max, sconto_min)
      VALUES ('$idarticolo', '$articolo', '$ksreparti', '$kscategoria', '$prezzodivendita', '$scanto', '$giacenza', '$sconto_max', '$sconto_min') ;   ";
    
    //prendere variabile dal form di html
                     //se dati salvata in data base
    if($sql->query($insert)===true){
        echo "salvato i dati";
    }else{
        echo "errore".$insert."<br>".$sql->$insert;
    }
    $sql->close();

}

}
?>