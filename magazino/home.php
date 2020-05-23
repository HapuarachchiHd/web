<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 </script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: pink;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
  
  </style>
</head>
<body>



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <img src="teddy.jfif" class="img-circle" alt="Cinque Terre" width="304" height="236"> 

      <h4>MAGAZZINO</h4>
      <ul class="nav nav-pills nav-stacked">
        <li> <a class='button'  href='http://localhost/progetto/log.php'><button  type='button' class='btn btn-primary'>utente registrato</button></a></li>
        <li> <a class='button'  href='http://localhost/progetto/regis.php'><button  type='button' class='btn btn-primary'>utente non registrato</button></a></li>
       
            </ul><br>
     
    </div>

    <div class="col-sm-9">
      
</div>

<footer class="container-fluid">
         


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
    echo "<table style='width:70%'>";
    echo"<style>table, th, td {border: 4px solid gray;}</style>";
    echo "<center><h1>visualizza acquisti & fornitori<h1></center>";
    $insert ="SELECT articolo,costo,quantita,scanto
    FROM tdarticoli, tbfornitori,tbaquisto
    WHERE idfornitori=ksfornitori AND idarticolo=ksarticolo
    ORDER BY articolo,dataaquisto; ";
    $result=mysqli_query($sql,$insert);  //se connesso resulta
    if(mysqli_num_rows($result)>0){ //controlla che tabella esiste che almeno una righa
        echo"<tr>
   
    <th>articolo</th>
    <th>costo</th>
    <th>sconto </th>
    
  </tr>";
    while($row=mysqli_fetch_assoc($result)){ //se esiste visualizza le campi
  
    echo "<tr><td>"."".$row["articolo"]."</td><td>"."".$row["costo"]."</td><td>"."".$row["scanto"]."</td>"."</tr>";
    }
}

?>


</footer>
<hr>
<center>
<nav>
<h1>Navigatore</h1>
<ul style="list-style-type:square;">
      <li>nome del prodotto</li>
      <li>sconto</li>
      <li>prezzo</li>
    </ul>
  </nav>

<nav>
<h1>Utente Registrato</h1>
<ul style="list-style-type:square;">
      <li>nome del prodotto</li>
      <li>prezzo di vendita </li>
      <li>reparti</li>
       <li>categoria</li>
        <li>sconti</li>
    </ul>
  </nav>
 </center>
  <hr>
</body>
</html>
