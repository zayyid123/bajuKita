<?php  
session_start();
include "lib/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BajuKita</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- datatables -->
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php 
        include "lib/navigasi.php";
        ?>

        <!-- konten -->
        <?php
            @$page = $_GET['page'];

            if(!empty($page)){

                
                switch ($page) {
                        case 'home':
                            include "lib/home.php";
                            break;

                        case 'stokproduk':
                            include "lib/stokproduk.php";
                            break;

                        case 'order':
                            include "lib/order.php";
                            break;

                        case 'pesananku':
                            include "lib/pesananku.php";
                            break;

                        case 'ketproduk':
                            include "lib/ketproduk.php";
                            break;
                }

            }else{

                include "lib/home.php";

            }
        ?>



        <!-- Footer-->
        <?php  
        include "lib/footer.php";
        ?>
        
        <!-- modal -->
        <?php  
        include "lib/modalportfolio.php";
        ?>

        <!-- copyright -->
        <?php  
        include "lib/copyright.php";
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- sweet alert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
        <!-- datatables -->
        <script src="DataTables/core/js/jquery.dataTables.min.js"></script>
        <script src="DataTables/datatables.min.js"></script>
        <script>

        $(document).ready( function () {
            $('#stokuser').DataTable();
        } );
        </script>
    </body>
</html>
