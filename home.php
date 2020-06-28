<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>

    <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"crossorigin="anonymous">

    <!-- JS Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
       
    <!-- Favicon -->
     <link rel="shortcut icon" href="Ressources\blog-removebg-preview.png" type="image/x-icon">
     
      <!-- Font awesome -->
     <script src="https://kit.fontawesome.com/f84ba90e3b.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
        
       
        <div class="container">
             <div class="row" id="head">
                 <div class="col">
                     <center>
                          <a href="home.php"> <img src="img/logo.png" style="width: 25%;"/></a>
                     </center>
                </div>
            </div>
        </div>
       
        <br> <br>
        
    <div class="container">
        <div class="jumbotron">
                    <div class="row">
                
                        <div class="col">
                        <h4 style="font-size : 18px"> Bienvenu <?php echo "$username" ?> ! Ravi de vous revoir dans vos blogs ..</h4>
                        </div>
                        <div class="col"> 
                            <a href="logout.php" style="color : black; font-size: 16px; margin-left: 80%">Se déconneter</a>
                        </div>
                    </div>
                

            </div>
        <br> 
            <div class="row" id="profile">
                
                <div class="col">
                      <?php	
		      $username=$_SESSION['name'];

		       $sql = "SELECT 	* FROM signup where name='$username'";
                        $result = $conn->query($sql);

                         if ($result->num_rows > 0) {
                          // output data of each row
                         while($row = $result->fetch_assoc()) {
                                 $location= $row["image"];
                        echo "<img id='img' src='$location'>";
                        }
                       } else {
                      echo "0 results";
                     }
                        $conn->close();
                       ?>
                    </div>
                
                
                
                
                 <div class="col" id="pro2">
                    <div class="jumbotron">
                    <?php

                 include("conn.php"); 
                 $username=$_SESSION['name'];
                 if(isset($_POST['submit'])){
                    $name=$_FILES['myfile']['name'];
                    $tmp_name=$_FILES['myfile']['tmp_name'];
                    
                if($name)
                {
                $location="image/$name";
                move_uploaded_file($tmp_name,$location);	
		
                $query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
		header("Location:suc.php");
                }
                else 
		die("Please select a file");
                }

                echo "<br>";
                echo "

                <form action='home.php' method='post' enctype='multipart/form-data'>

                <input type='file' name='myfile'>
                <input type='submit' name='submit' value='Change Your Avatar'>
                </form>
                ";
                ?>
                    </div>
                </div>
                
                

            </div>
        <br>
        <hr>
        <div id="post" class="row">
            
             <div class="col">
                 
                 
                 
                 <form  method="post" action="post.php">
                     <div class="row">
                        <div class="col">
                             <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="title ... ">
                        </div>
                        <div class="col">
                             <input type="text" class="form-control" id="exampleInputPassword1" name="des" placeholder="describe ... ">
                        </div> 
                        <div class="col">
                            <button type="submit" class="btn btn-outline-warning">post</button>
                        </div> 
                     </div>
                                        
                   </form>
                 
                 
               
                 
            </div>
        
            
        </div>
        
                
        <hr>
        <div id="body" class="row">
            <div class="col">
                <?php	
                    $sql = "SELECT* FROM posts ORDER BY id desc";
                    $result = $conn -> query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                            echo   "<b>"."Title:" .$row["title"]."</b>"."<br>". $row["post"]."<br>"."<i>Posted By--</i><br>"."<b>".$row["name"]." </b>"."<b>".$row["time"]."</b>";


                                    echo"<hr>";
                            echo "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
            
        </div>
              
        
              
                
                
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

            </div>
    
    
    </body>
</html>







