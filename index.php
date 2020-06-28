<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Favicon -->
     <link rel="shortcut icon" href="img/X-icone.png" type="image/x-icon">

    <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"crossorigin="anonymous">

    <!-- JS Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        
        
</head>
<body>
    <div class="container">
        
        <!-- Connect with database -->
            <?php 'conn.php'?>
        
        <div class="row" id="head">
            <div class="col">
                <center>
                    <a href="home.php"> <img src="img/logo.png" style="width: 40%;"/></a>
                </center>
            <div class="container">
                    <div class="row">
                        <div class="col">

                             <div class="jumbotron">

                                <center>
                                <h2>S'identifier</h2>
                                </center>
                                <br>
                                  <!-- Login -->
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                            <input type="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mot de passe</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                                        </div>
                                        <button type="submit" class="btn btn-outline-danger">S'identifier</button>
                                    </form>
                             </div>

                        </div>

                
                        <br> <br>
                        <div class="col">
                            <div class="jumbotron">
                                <center>
                                <h2>S'inscrire</h2>
                                </center>
                                <br>
                                <!-- signup -->

                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'u d'autre.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                                </div>
                                <button type="submit" class="btn btn-outline-danger">S'inscrire</button>
                            </form>
                        </div>

                    </div>
                </div>



            </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
            
            
            
            

        </div>
    
    
</body>
</html>