<?php
    include('inscrit.php');
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GDS APPS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/gds-logo.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-6">
                                <img src="images/gds-logo.png" height="50" width="50" alt="">
                                <a class="text-center" > <h4>Global Display Solution</h4></a>
                                
                             
                          
                                <form class="mt-5 mb-5" action="inscrit.php" method="post">
                                <div class="form-group">
                                    <div class="form-group">
                                    <input type="text" id="inputnom" class="form-control" placeholder="nom" name="username" required autofocus>
                                    </div>
                                    <div class="form-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" name="email" required autofocus>
                                    </div>
                                    <div class="form-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit" name="ajouter">ajouter</button>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>