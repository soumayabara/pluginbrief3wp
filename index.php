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
        <?php 'conn.php'?>
        
        <div class="row" id="head">
            
                 <div class="col">
                     <center>
                         <a href="home.php"> <img src="Ressources\blog-removebg-preview.png" style="width: 30%;"/></a>
                     </center>
                </div>
        </div>
            <br>

            <div id="info">
                

                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                             <div class="jumbotron">
                                
                                <center>
                                    <h2>login <i class="fas fa-sign-in-alt" style="color: #ffc107"></i></h2>
                                </center>
                                <br>
                                  <!-- Login -->
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                                        </div>
                                        <button type="submit" class="btn btn-outline-warning">login</button>
                                    </form>
                             </div>
                           
                        </div>
                        
                        <br> <br>
                        <div class="col">
                            <div class="jumbotron">
                                <center>
                                <h2>Sign Up <i class="fas fa-user-plus" style="color: #ffc107"></i></h2>
                                </center>
                                <br>
                                <!-- signup -->

                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                                </div>
                                <button type="submit" class="btn btn-outline-warning">Signup</button>
                            </form>
                        </div>
                            
                    </div>
                </div>
                 

                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
            
            
            
            

        </div>
    
    </div>
</body>
</html>
