<?php
                
              
                    
$db= mysqli_connect("localhost","root","","game");


$sql1="SELECT * FROM spin   ";
$count = mysqli_query($db,$sql1);
$c=mysqli_num_rows($count);
$rand=rand(1,$c)-2;

    




$sql="SELECT * FROM spin  WHERE id >'$rand' LIMIT 1";

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
        <h6>
            
            <p2>Do this :</p2>
            <h><marquee> <p2><?php   echo "<h>$text</h>"  ; ?></p2> #NB..AND DO WHAT THE GAME SAY OR YOU WILL BE PUNISH </marquee></h></h6>
        
        
        <hr>
        
        
        
        
        
        <div class="heading">
            
           
           <h><marquee>press <p2>play</p2> to choose the next person to spin</marquee></h><br>
            
            <div class="spinForm">
              <form action='spin.php' method="post">
                  
                  
                  
     <br> <br> <button name= "spin" class="spin2">[++ play ++] </button><br><br>
        
      
        
     </form>
            
            
            
            
            
            </div>
            
            
            
            
           
        
     <br>
        </div>
       
        
      
        <br>
        <br>
       
      
        
       
        
        <br>
     
       
    </div>
   
  
        
</body>
</html>
<?php


include_once("conn.php");

if(isset($_POST['spin'])){
    
  
    
    
   
header('location:startgame.php');
    
}
?>


