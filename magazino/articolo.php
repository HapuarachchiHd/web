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
    font-family:Arial, Helvetica, sans-serif
}
</style>
<body>
<center>
    <div>

    <h1>Tabella di Articolo</h1>

<form action=articolo.php  method="POST" >
idarticolo:   <input type= "text" placeholder="id di idarticolo" name="idarticolo"><br><br>
articolo:<input type= "text" placeholder="articolo" name="articolo"><br><br>
ksreparti:<input type= "text" placeholder="ksreparti" name="ksreparti"><br><br>
kscategoria:<input type= "text" placeholder="kscategoria" name="kscategoria"><br><br>
sconto':   <input type= "text" placeholder="sconto" name="scanto"><br><br>
giacenza<input type= "text" placeholder="giacenza" name="giacenza"><br><br>
sconto_max<input type= "text" placeholder="sconto_max" name="sconto_max"><br><br>
sconto_min<input type= "text" placeholder="sconto_min" name="sconto_min"><br><br>
<input type ="submit" value ="click">
</form>
</div>
<a class='button'  href='http://localhost/progetto/home.php'><button  type='button' class='btn btn-primary'>HOME PAGE</button></a>
<?php 
$c =new cli;
$c ->tdarticolo();
cli.tdarticolo();
?>

</center>
</body>
</html>