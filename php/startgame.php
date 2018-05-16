
<?php
                
              
                    
$db= mysqli_connect("localhost","root","","profile");


$sql1="SELECT * FROM players ";
$count = mysqli_query($db,$sql1);
$c=mysqli_num_rows($count);
$rand=rand(1,$c) -1;

    




$sql="SELECT * FROM players  WHERE id >'$rand' LIMIT 1";

 //replace get=results               
$results = mysqli_query($db,$sql);


  while ($row= mysqli_fetch_array($results)){
                                                       
          $text =$row['text']; 
      
       
                    
                
                   
                }
                
                
                
 ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>start the game page</title>
    
	<link rel="stylesheet" type="text/css" href="../css/style.css">
   
</head>
<body>
   
    <div class="border"><br>
         <h><marquee> PLEASE PRESS SPIN..<p2><?php   echo "$text"  ; ?></p2> ..AND DO WHAT THE GAME SAY OR YOU WILL BE PUNISH </marquee></h><hr>
        <div class="heading">
            
           
            <div class="spinForm">
              <form action='startgame.php' method="post">
                  
                  
                  
      <button name= "spin" class="spin">["(-- s p i n --)"] </button><br>
     <br>  <button name= "add" class="spin">add new player </button><br>
     <br>  <button name= "update" class="spin">update player </button><br>
     <br>  <button name= "delete" class="spin">remove player </button><br>
     <br> <button name= "location" class="spin">location</button>        
                  
                  
    
        
      
        
     </form>
            
            
            
            
            
            </div>
            
            
            
            
           
        
     <br>
        </div>
       
        
      
        
        
     
       
    </div>
   
  
        
</body>
</html>
<?php


include_once("conn.php");

if(isset($_POST['spin'])){
    
  
    
    
   
header('location:spin.php');
    
}
if(isset($_POST['add'])){
    
  
    
    
   
header('location:../start.php');
    
}
if(isset($_POST['update'])){
    
  
    
    
   
header('location:update.php');
    
}
if(isset($_POST['delete'])){
    
  
    
    
   
header('location:delete.php');
    
}






?>


