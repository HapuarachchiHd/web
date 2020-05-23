<!DOCTYPE html>
<html lang="en">
<body>
    <form action="image.php" method="post" >
        Select image to upload:
        <input type="text" name="image">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
   
  
        $image = $_POST['image'];
        

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'turismo';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
       
        
        //Insert image content into database
        $insert = $db->query("INSERT INTO `images`( `image`) VALUES ('$image')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }

?>