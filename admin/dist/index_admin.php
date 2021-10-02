<?php 
    include "../../lib/koneksi.php";
    session_start();
    if($_SESSION['level'] == '')
    {
        header("location:../../lib/login.php");
    }elseif ($_SESSION['level'] == 'user') {
        header("location:../../index.php");
    }elseif ($_SESSION['level'] == 'admin') {
        
    }else { 
        header("location:../../lib/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BajuKita</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.ico" />\
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Datatables -->
        <link href="../../DataTables/datatables.min.css" rel="stylesheet" />
        <script src="js/Chart.js"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <!-- navbar atas -->
        <?php  
        include "lib/navbar_atas.php";
        ?>


        <!-- sidebar -->
        <?php  
        include "lib/sidebar.php";
        ?>

        
            <div id="layoutSidenav_content">
                <!-- konten -->
                <?php
                    @$page = $_GET['page'];

                    if(!empty($page)){

                        
                        switch ($page) {
                                case 'dashboard':
                                    include "lib/dashboard.php";
                                    break;

                                case 'pesanan':
                                    include "lib/pesanan.php";
                                    break;

                                case 'databarang':
                                    include "lib/data_barang.php";
                                    break;

                                case 'datamitra':
                                    include "lib/data_mitra.php";
                                    break;

                                case 'editbarang':
                                    include "lib/proses/edit_barang.php";
                                    break;

                                case 'editmitra':
                                    include "lib/proses/edit_mitra.php";
                                    break;

                                case 'tambahbarang':
                                    include "lib/proses/tambah_brg.php";
                                    break;
                        }

                    }else{

                        include "lib/dashboard.php";

                    }
                ?>

                <!-- footer -->
                <?php  
                include "lib/copyright.php";
                ?>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="../../DataTables/datatables.js"></script>
        <script>
        $(document).ready( function () {
            $('#databarang').DataTable();
            $('#datamitra').DataTable();
            $('#datapesanan').DataTable();
        } );
        </script>

        
        
    </body>
</html>
