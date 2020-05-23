<?php
include ("server.php");
?>
<html>
<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  border-radius: 56px;
  box-shadow: black 0px 0px 5px 5px ;
}
input[type=submit] {
  width: 100%;
  background-color:gray;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: solid black 2px;
  border-radius: 4px;
  cursor: pointer;
  border-radius: 116px;
}

input[type=submit]:hover {
  background-color: gray;
  border-radius: 116px;
  border: black;
}

div {
  border-radius: 5px;
  background-color: gray;
  padding: 20px;
  border-radius: 116px;
  width: 50%;
  box-shadow:black 0px 0px 5px 13px ;
}
h1{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
</style>
<body>
<center>
    <div>

    <h1>Tabella di Acquisti</h1>
<form action=client.php  method="POST" >
idaquisto:   <input type= "text" placeholder="id di aquisto" name="idaquisto">
ksarticolo:<input type= "text" placeholder="quantita di aquisto" name="ksarticolo">
ksfornitori:<input type= "text" placeholder="quantita di aquisto" name="ksfornitori">
quantita:<input type= "text" placeholder="quantita di aquisto" name="quantita">
costo':   <input type= "text" placeholder="costo" name="costo">
data di aquisto<input type= "date" placeholder="dataaquisto" name="dataaquisto">
<input type ="submit" value ="click">
</form>
</div>
<a class='button'  href='http://localhost/progetto/home.php'><button  type='button' class='btn btn-primary'>HOME PAGE</button></a>
<?php 
$c =new cli;
$c ->dati();
cli.dati();
?>

</center>
</body>
</html>