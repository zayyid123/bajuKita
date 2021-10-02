    <style>
        /* ==============efek button saya====================== */
        .btnku{
            width: 50px;
            height: 40px;
            background: linear-gradient(to bottom, rgb(255, 166, 0) 0%,rgb(255, 166, 0) 100%); /* W3C */
            border: none;
            border-radius: 5px;
            position: relative;
            border-bottom: 4px solid rgb(238, 155, 0);
            color: #fbfbfb;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
            text-shadow: 1px 1px 1px rgba(0,0,0,.4);
            font-size: 15px;
            text-align: center;
            box-shadow: 0px 3px 0px 0px rgba(0,0,0,.2);
            cursor: pointer;
            transition-duration: 0.3s;
            margin: 5px;
        }

        .btnku:hover{
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
        }
        /* ==============akhir efek button saya================ */

        /* ======================================= produk ================================ */
        .kontener-produk{
            color: #2c3e50;
            margin-top: 5px;
        }

        .produk{
            margin: auto;
            width: 80%;
            justify-content: center;
            display: flex;
            align-items: left;   
            flex-wrap: wrap;
        }

        .jdl-produk{
            text-align: center;
            padding-top: 100px;
        }

        .card-produk{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-radius: 10px;
            margin-right: 40px;
            margin-top: 20px;
            padding-bottom: 20px;
            max-width:200px;
            transition: 0.3s;
        }

        .card-produk:hover{
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
        }

        .card-produk img{
            width: 100%;
        }

        .card-produk h2{
            margin: 10px;
        }

        .card-produk .keterangan-brg{
            margin: 10px;
        }

        .keterangan-harga{
            float: left;
            padding-left: 10px;
        }

        .keterangan-harga p{
            font-weight: bold;
        }

        .hrg-brg{
            color: red;
            font-weight: bold;
            margin-right: 10px;
        }

        .nama-brg{
            margin: 10px;
        }


        /* ====================================akhir produk ================================ */

    </style>
    
    <!-- produk -->
    <div class="kontener-produk" id="produk">
        <h1 class="jdl-produk">Produk</h1>
        <div class="produk">
            

            <?php 
            $qtampil = mysqli_query($koneksi,"SELECT * FROM barang");
            while($data = mysqli_fetch_array($qtampil)) {
            ?>
            <div class="card-produk">
                <?php echo "<img style=' border-radius: 10px 10px 0 0' src='assets/img/barang/$data[img_barang]' />";?>
                <h4 class="nama-brg"><?php echo $data['nama_brg']; ?></h4>
                <div class="keterangan-harga">
                    <p>Harga :</p>
                    <div class="hrg-brg"><?php echo "Rp " . number_format($data['harga_brg'],2,',','.'); ?></div>
                </div>
                <div class="btnku-sewa"><a href="?page=ketproduk&id_brg=<?php echo $data['id_barang']; ?>"><button class="btnku" >Order</button></a></div>
            </div>
            <?php } ?>

        </div>
    </div>
    
    <!-- akhir produk -->
    <br><br>



