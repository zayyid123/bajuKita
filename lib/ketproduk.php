<style>
.produk-all {
    margin-top: 20px;
    background-color: rgb(235, 235, 235);
    padding: 20px;
    border-radius: 10px;
    color: #2c3e50;
}

.produk-all img {
    border-radius: 10px;
    margin: 10px;
    width: 100%;
    height: 100%;
    border: solid 2px white;
}

.keterangan {
    background-color: white;
    margin-top: 10px;
    padding-left: 20px;
    padding-right: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    padding-top: 5px;
    padding-bottom: 10px;
}

.gmbrbesar {
    width: 300px;
    height: 400px;
}

.harga {
    margin-right: 20px;
}

table td {
    width: 150px;
}

.jdlket{
    text-align: center;
}
</style>
<br><br><br><br>
<div class="container produk-all">
    <div class="row">
        <div class="col">
            <h1 class="jdlket">keterangan Produk</h1>
        </div>
    </div>
    <?php 
    $id = $_GET['id_brg'];
    //user
    $user = mysqli_query($koneksi,"SELECT * FROM user WHERE username_user = '$_SESSION[username_user]'");
    $datauser = mysqli_fetch_array($user);
    

    //pesanan
    $pesanan = mysqli_query($koneksi,"SELECT * FROM pesanan");
    $datapesanan = mysqli_fetch_array($pesanan);

    //barang
    $barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang = '$id'");
    $databarang = mysqli_fetch_array($barang);
    ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="img">
                <a class="cover-container gmbrbesar">
                    <img id="cover" <?php echo "src='assets/img/barang/$databarang[img_barang]'" ?> alt="produk" >
                </a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="keterangan">
                <hr>
                <h1 class="nama-barang"><?php echo $databarang['nama_brg'] ?></h1>
                <hr>
                <form action="lib/proses_order.php" method="post">
                <input type="hidden" name="id_pesanan" class="form-control" >
                <input type="hidden" name="id_user" class="form-control" id="id1" placeholder="Masukkan id" value="<?php echo $datauser['id_user']; ?>">
                <input type="hidden" name="id_barang" class="form-control" id="id1" placeholder="Masukkan id" value="<?php echo $databarang['id_barang']; ?>">
                <input type="hidden" name="status" class="form-control"  value="waiting">
                <table>
                    <tr>
                        <td>Harga</td>
                        <td><?php echo "Rp " . number_format($databarang['harga_brg'],2,',','.') ?></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><?php echo $databarang['stok_brg'] ?> <span>produk</span></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesan</td>
                        <td><input type="hidden" name="tanggal" value="<?php echo date('y-m-d'); ?>"><span><?php echo date('d-M-Y'); ?></span></td>
                    </tr>
                    <tr>
                        <?php 
                        $total = 0;
                        ?>
                        <td>Jumlah</td>
                        <td>
                            <input type="number" class="input-jmlh" name="total_barang" <?php echo "max='$databarang[stok_brg]'" ?> min="1" value="1" style="margin-bottom: 5px;margin-top: 5px;">
                        </td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>Rp. <span class="ini_total">0</span></td>
                    </tr>
                    <input type="hidden" name="total_transaksi" class="form-control"  value="">
                </table>
                <hr>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin mau membuat pesanan ini ?')">Order Now</button>
                    <br><br>
                </form>
                    <a href="?page=order">
                        <button class="btn btn-warning" >Back</button>
                    </a>
                    <button class="btn btn-dark" onclick="total()">Hitung total</button>
                <hr>
            </div>
        </div>
    </div>
</div>
<br><br>
<!-- akhir produk.php -->

<!-- js -->
<script>
function total() {
    var total_input_jmlh = document.querySelector(".input-jmlh").value;
    var total_beli = total_input_jmlh * <?php echo "$databarang[harga_brg]" ?>;
    document.querySelector(".ini_total").innerHTML =total_beli;
}
</script>