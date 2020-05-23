 <?php
include ("class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cerco</title>
</head>
<body>
<center>
<h1> login </h1>
    <form action="login.php" method="POST">
          user  <input type="text" name="user" placeholder=" cerco base a user "> <br> <br>
             pass  <input type="text" name="password" placeholder=" cerco base a user "> <br> <br>
            <input type="submit" value="submit" name="submit">  <br>
    </form>
  <?php
$c =new cli;
$c ->dati();
cli.dati();
?>
      </center>

</body>


</html>
