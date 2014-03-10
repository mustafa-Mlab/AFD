<!DOCTYPE HTML>

<?php
    session_start();
    include 'config.php';
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AFD </title>
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/custom.css" rel="stylesheet" media="screen">
    </head>
    <body>
        
        <div class="container">
            <div class="banner">
                <?php require 'banner.php'; ?>
            </div>
            <div class="page1">
                
                <?php
//                    if (!isset($_SESSION['Mem_id'])) 
//                        {
//                            require 'login.php';
//                        } 
//                    else 
//                        {
//                            Echo" <h2>";
//                            echo 'Logged in as ' . $_SESSION['Mem_name'];
//                            Echo"<br> <a href='logout.php'>LOGOUT</a>";
//                            Echo"</h2>";
//                        }
//                    if (!empty($_GET['id'])) 
//                        {
//                            $id = $_GET['id'];
//                            if ($id) 
//                                {
//                                     include($id . '.php');
//                                }
//                            else 
//                                {
//                                    require 'home.php';
//                                }
//                        }
                    require 'login.php'; 
                    
                 ?>
            </div>
            <div class="page2 clearfix">
                <?php require 'home.php'; ?>
            </div>
            
        </div>
        
        <div class="footer clearfix ofwhite">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    @copyright MasterMind 
                </div>
                <div class="col-md-4">
                    01724939534
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.vticker.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>

