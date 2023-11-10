<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>

            .input-container {
            display: flex;
            width: 100%;
            margin-bottom: 15px;
            }

            .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
            }

            .input-field {
            width: calc(100% - 70px);
            padding: 4px;
            outline: none;
            }


            .input-field:focus {
            border: 2px solid dodgerblue;
            }
                        
            .btn {
            margin: 0 auto;
            width: 150px;
            height: 40px;
            background-color: dodgerblue;
            }

            .btn:hover {
            background-color: #6CB4EE;
            }

            .btn-primary {
            color: white;
            }

            .fa {
            font-size: 16px;
            }

            .error{
                background: #F2DEDE;
                color: #A94442;
                padding: 10px;
                width: 100%;
                border-radius : 5px;
            }

            .error{
                background: #F2DEDE;
                color: #A94442;
                padding: 10px;
                width: 100%;
                border-radius : 5px;
            }    
    
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><i class="fa-solid fa-circle-user fa-3x" style=" color: dodgerblue;"></i>
<br>
                                    Login</h3></div>
                                    <div class="card-body">
                                        <form action="login_process.php" method="post" autocomplete="off">

                                        <?php 
                                            if (isset($_GET['error'])) {
                                                $errorMessage = $_GET['error'];
                                                echo '<p class="error">' . htmlspecialchars($errorMessage) . '</p>';
                                            }
                                            ?>


                                            <div class="input-container">
                                            <i class="fa fa-user icon"></i>
                                            <input class="input-field" type="text" placeholder=" Username" name="username">
                                        </div>

                                            <div class="input-container">
                                                 <i class="fa fa-key icon"></i>
                                                <input class="input-field" type="password" placeholder=" Password" name="password">
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    <?php include 'includes/fotter.php'; ?>