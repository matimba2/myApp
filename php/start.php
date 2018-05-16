

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>profile page</title>
    
	<link rel="stylesheet" type="text/css" href="../css/style.css">
   
</head>
<body>
   
    <div class="border"><br>
         <h ><marquee>..spin game <p2>players profile</p2> </marquee></h><hr>
        <div class="heading">
            
            <div class="product">
            
           <?php
                
              
                    
                 $db= mysqli_connect("localhost","root","","profile");
                $sql="SELECT * FROM players";
                $results = mysqli_query($db,$sql);
                while ($row= mysqli_fetch_array($results)){
                    
                    echo "<div class='image2'>";
                    
                    
                    echo"<img  src='image/".$row['image']."'>";
                    
                    echo "<p5> ".$row['id'].   " :: </p5>";
                    echo "<p5>".$row['text'].  "</p5>";
                    
                    
                    echo "<div>";
                }
                
                
                
                
           ?>
            
            
            
            </div>
        
     <br>
        </div>
       
        
      
        <br>
        <br>
       
       <br>
        <br>
        
        <br>
        
        <br>
     
       
    </div>
    <form action='start.php' method="post">
      <button name= "add" class="add">add new player1</button><br><br>
        
      <button name= "delete" class="delete">delete player</button><br><br>
      <button name= "update" class="update">update player</button><br><br>
        
        
     <button name= "startgame" class="startgame">PLAY</button>
        
     </form>
  
        
</body>
</html>


<?php
$msg="";
//if add btn is pressed

if (isset($_POST['upload'])){
	//the path to store the add image
    
    $target = "image/".basename($_FILES["image"]["name"]);
    
    //connect to database
    
    $db= mysqli_connect("localhost","root","","profile");
    
    //get all submitted data from form
    $image=$_FILES['image']['name'];
    $text =$_POST['text'];
    
    
    
    
    $sql = "INSERT INTO players (image,text) VALUES ('$image','$text')";
    
    
   mysqli_query($db, $sql);
    
    //place the image to image folder:images
    
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    
        $msg ="player have been added";
        
    
}else {
        $msg ="fail to add player";
    }
     header('location:start.php');
}


if (isset($_POST['add'])){
    
    header('location:../start.php');
}

if (isset($_POST['delete'])){
    
    header('location:delete.php');
}

if (isset($_POST['update'])){
    
    header('location:update.php');
}

if (isset($_POST['startgame'])){
    
    header('location:startgame.php');
}
?>

