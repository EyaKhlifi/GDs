<?php 
session_start();
if(!isset($_SESSION["user"])){

    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GDS Web Apps</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/gds-logo.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
   
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo gradient-9">
                <a href="home.php">
                    <b class="logo-abbr" style="font-weight: bold;font-style: italic;">GDS </b>
                    <span class="logo-compact">GDS</span>
                    <span class="brand-title" style="font-style: italic;" >
                        Global Display Solution
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/form-user.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="inscrit.php"><i class="icon-user"></i> <span><?php  echo $_SESSION["user"];?></span></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"><h3 class="text-primary"><b>Dashboard</b></h3></li>
                    <li>
                        <a href="home.php" aria-expanded="false">
                            <i class="icon-speedometer menu-icon" ></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label"><h5 class="text-primary">Parc Informatique</h5></li>
                    <li>
                        <a class="has-arrow" href="pc.php" aria-expanded="false">
                            <i class="fa fa-desktop"></i> <span class="nav-text">Ordinateur</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="laptop.php"><i class="fa fa-solid fa-laptop"></i>Laptop</a>
                            </li>
                            <li>
                                <a href="pc_bureau.php"><i class="fa fa-desktop"></i>PC bureau</a>
                            </li>
                            <li>
                                <a href="mini_pc.php"><i class="fa fa-laptop"></i>Mini PC</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="imprimante.php" aria-expanded="false">
                            <i class="fa fa-print"></i><span class="nav-text">Imprimante</span>
                        </a>
                        
                    </li>
                    <li>
                        <a  href="scanner.php" aria-expanded="false">
                            <i class="fa fa-print"></i><span class="nav-text">scanner</span>
                        </a>
                        
                    </li>
                    <li>
                        <a  href="ecran.php" aria-expanded="false">
                            <i class="fa fa-tv"></i></i><span class="nav-text">ecran</span>
                        </a>
                     
                    
                    <li>
                        <a  href="tel.php" aria-expanded="false">
                            <i class="fa fa-mobile"></i><span class="nav-text">telephone</span>
                        </a>
                        
                    </li>
                    <li>
                        <a  href="switch.php" aria-expanded="false">
                            <i class="fa fa-server"></i><span class="nav-text">switch</span>
                        </a>
                        
                    </li>
                    
                    <li>
                        <a  href="serveur.php" aria-expanded="false">
                            <i class="fa fa-server"></i><span class="nav-text">serveur</span>
                        </a>
                    </li>
                    <li class="nav-label"><h5 class="text-primary">exporte inventaire</h5></li>
                    <li>
                    <li>
                        <a class="has-arrow"  aria-expanded="false">
                            <i class="fa fa-download"></i> <span class="nav-text">exporte</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="fpdf/export_pdf.php"><i class="fa fa-file"></i>exporter PDF</a></li>
                            <li><a href="export_excel.php"><i class="fa fa-table"></i>exporte excel</a></li>
                          
                        </ul>
                        <li>
                        <a  href="ajouter_utilisateur.php" aria-expanded="false">
                            <i class="fa fa-user"></i><span class="nav-text">Ajouter Utilisateur</span>
                        </a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        