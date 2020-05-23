<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
   
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">  
   
   <link rel="icon" href="favicon.ico" type="image/x-icon">
   <title>Disney</title>
</head>
<body>
  <nav class="nav-wrapper pink">
    <div class="container">
      <a href="" class="brand-logo">Disney</a>
      <ul class="right">
        <li><a href="">home</a></li>
        <li><a href="#vote" class="modal-trigger">vote</a></li>
        <li><a href="#contact" class="modal-trigger">contact</a></li>
        <li><a target="_blank" href="https://www.facebook.com/mdm.yvonne" class="btn-floating blue accent-1 "><i class="fab fa-facebook-f"></i></a></li>
      </ul>
    </div>
  </nav>  

  <div class="modal" id="contact">
    <div class="modal-content">
      <h4>contact</h4>
      <p>3208587632 shehani</p>
    </div>
            <div class="modal-footer">
              <a href="" class="modal-close btn sm">close</a>
            </div>
          </div>  


  <div class="modal" id="vote">
    <div class="modal-content">
      <h4>contact</h4>
      <a href="valutazione.php" >vote</a>
    </div>

    <div class="modal-footer">
      <a href="" class="modal-close btn sm">close</a>
    </div>
  </div>

  <div class="row">
    <div class="col s8 l8">
      <h3>Disney song</h3>
      <?php include_once("disney.php") ?>
    </div>

    <div class="col s4 l3 offset-l1">
      <h3>TODO LIST</h3>
    <form action="" method="POST">
        <input type="text" name="commento" />
        <input type="submit" name="click" value="click" />
    </form>
    <?php include_once("comment.php") ?>
  </div>
  </div>
  
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  <script>
    $(document).ready(function(){
      $(".modal").modal();
    })
  </script>
 
</body>
</html>