<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>update page</title>
    
	<link rel="stylesheet" type="text/css" href="../css/style.css">
   
</head>
<body>
   
    <div class="border"><br>
         <h><marquee>UPDATE THE PLAYER NAME</marquee></h><hr>
        <div class="heading">
            
           <div class='updateForm'>
            
            
            <form action='update.php' method="post">
                    
              <br>  <input type="text" placeholder="please enter id" name="id"><br><br>
                <input type='text' name="text" placeholder="update play name"><br><br>
                <button name="update" >update player</button>
                
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
       
    </div>
   
  
        
</body>
</html>

<?php


include_once("conn.php");

if(isset($_POST['update'])){
    
  
    
    
    $text=$_POST['text'];
    
     $sql="UPDATE players SET text='$text' where id='$_POST[id]'";
    
     mysqli_query($db, $sql);
    
       header('location:start.php');
    
}
?>


