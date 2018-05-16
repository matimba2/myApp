



<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>add page</title>
    
	<link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>
<body>
   
    <div class="border"><br>
         <h><marquee>PLease Add players below ...</marquee></h><hr>
        <div class="heading">
            
            <div class="content">
            <div >
                
                
            <form    action="php/start.php" method="post" enctype="multipart/form-data">
                <div class="addform1">
                <br>
               <input type="hidden" name="size" value="1000000">
                
                
                <textarea name="text" cols="10" rows ="2" placeholder="enter name" ></textarea>
                
                <div>
                    
                    <input type="file" name="image" accept="image/*" capture>
                
                </div>
                <br><br>
                
                <div><input type="submit" value="add player" name="upload" class="addbtn"></div>
                </div>
                
                
            </form>
            
            </div>
            
            </div>
        
     <br>
        </div>
       
        
      
        <br>
        
        
        
        
        <br>
        <br>
        
        
       <form  action="start.php" method="post" >
        <button class="exitbtn" name="back">home</button>
        
        <button class="startbtn" name="profile">profile</button>
        </form>
       
    </div>
</body>
</html>


<?php


if(isset($_POST['profile'])){
    
  header('location:php/start.php');


}

if(isset($_POST['back'])){
    
  header('location:index.html');


}
?>
      
         