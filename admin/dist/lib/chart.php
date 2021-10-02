<?php  

                $bln1  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln1 FROM pesanan WHERE MONTH(tgl_transaksi) = '1'");
                $databln1 = mysqli_fetch_array($bln1);
                
                $bln2  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln2 FROM pesanan WHERE MONTH(tgl_transaksi) = '2'");
                $databln2 = mysqli_fetch_array($bln2);

                $bln3  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln3 FROM pesanan WHERE MONTH(tgl_transaksi) = '3'");
                $databln3 = mysqli_fetch_array($bln3);

                $bln4  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln4 FROM pesanan WHERE MONTH(tgl_transaksi) = '4'");
                $databln4 = mysqli_fetch_array($bln4);

                $bln5  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln5 FROM pesanan WHERE MONTH(tgl_transaksi) = '5'");
                $databln5 = mysqli_fetch_array($bln5);

                $bln6  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln6 FROM pesanan WHERE MONTH(tgl_transaksi) = '6'");
                $databln6 = mysqli_fetch_array($bln6);

                $bln7  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln7 FROM pesanan WHERE MONTH(tgl_transaksi) = '7'");
                $databln7 = mysqli_fetch_array($bln7);

                $bln8  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln8 FROM pesanan WHERE MONTH(tgl_transaksi) = '8'");
                $databln8 = mysqli_fetch_array($bln8);

                $bln9  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln9 FROM pesanan WHERE MONTH(tgl_transaksi) = '9'");
                $databln9 = mysqli_fetch_array($bln9);

                $bln10  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln10 FROM pesanan WHERE MONTH(tgl_transaksi) = '10'");
                $databln10 = mysqli_fetch_array($bln10);

                $bln11  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln11 FROM pesanan WHERE MONTH(tgl_transaksi) = '11'");
                $databln11 = mysqli_fetch_array($bln11);

                $bln12  = mysqli_query($koneksi, "SELECT  count(tgl_transaksi) AS bln12 FROM pesanan WHERE MONTH(tgl_transaksi) = '12'");
                $databln12 = mysqli_fetch_array($bln12);

?>