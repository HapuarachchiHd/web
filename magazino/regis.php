
<!DOCTYPE html>
<html lang="en">
<head>
    <title>registra utente nuovo</title>
</head>
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

body {
  background-color: pink;
}
</style>

<body>
<center>
    <div>
<h1> registra utente nuovo </h1>
    <form action="registro.php" method="POST">
          nome  <input type="text" name="nome"> <br> <br>
           cognome <input type="text" name="cognome">  <br> <br>

           username <input type="text" name="user">    <br> <br>
            pass <input type="text" name="password">    <br> <br>

            <input type="submit" value="clik">  <br>
            <a class='button'  href='http://localhost/progetto/home.php'><button  type='button' class='btn btn-primary'>HOME PAGE</button></a>
    </form>
</div>
      </center>
</body>
</html>

