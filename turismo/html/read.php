


<?php

//DB details
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'turismo';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Check connection
if($db->connect_error){
   die("Connection failed: " . $db->connect_error);
}

//Get image data from database
$result = $db->query("SELECT image FROM images WHERE id = 1");

if($result->num_rows > 0){
    $imgData = $result->fetch_assoc();
    
    //Render image
       echo "<img id= 'image'  src='https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fopenimagedenoise.github.io%2Fimages%2Fmoana_16spp_oidn.jpg&f=1&nofb=1'width='2000' height='2000' >"; 
    

       echo $imgData['image']; 
}else{
    echo 'Image not found...';
}

?>
