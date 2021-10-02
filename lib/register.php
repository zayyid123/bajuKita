<?php  
    include "koneksi.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BajuKita</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="proses_register.php" method="post">
                                            <div class="form-row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Username</label>
                                                        <input class="form-control py-4" name="username" id="inputFirstName" type="text" placeholder="Enter username" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" name="pass" id="inputPassword" type="password" placeholder="Enter password" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                            <input class="btn btn-primary btn-block " id="btnSubmit" type="submit" value="Create account">
                                            </div>
                                        </form>
                                        <br>
                                        <a class="btn btn-primary btn-block" href="../index.php?page=home">Close</a>
                                    </div>
                                    
                                    <?php  
                        
                                    if ($_SESSION['level'] == 'user') { ?>
                                        <div class="card-footer text-center">
                                            <div class="small">Hy <?php echo $_SESSION['username_user'] ?></div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="card-footer text-center">
                                            <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <br><br><br>
        <!-- copyright -->
        <?php  
        include "copyright.php";
        ?>

        
</html>
    
