<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>delete page</title>
    
	<link rel="stylesheet" type="text/css" href="../css/style.css">
   
</head>
<body>
   
    <div class="border"><br>
         <h><marquee>REMOVE <p2>PLAYER</p2> FROM THE GAME</marquee></h><hr>
        <div class="heading">
            
            <div class='deleteForm'>
            
            
            <form action='delete.php' method="post">
                        
              <br> <br>  <input type='text'  name='id' placeholder="enter id"><br><br>
                <button name="delete">delete player</button>
                
            </form>
            
            
            
            
            
            </div>
        
     <br>
        </div>
       
        
      
       <br>
        <br>
       
      
        
        <br>
        
        <br>
     <br>
        <br>
       
      
        
        <br>
        
        <br>
        <br>
    </div>
   <hr>
  
        
</body>
</html>


<?php
include_once("conn.php");

if(isset($_POST['delete'])){
    
  header('location:start.php');
    
     $sql="DELETE FROM `players` WHERE id='$_POST[id]'";
     mysqli_query($db, $sql);
    {
       
    }
}

?>


