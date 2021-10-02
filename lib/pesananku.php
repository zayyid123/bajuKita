<style>
.pesanan{
    color:#2c3e50;
}

.header{
    text-align: center;
}
</style>

<?php
    $id_user = mysqli_query($koneksi,"SELECT id_user AS nama FROM user WHERE username_user = '$_SESSION[username_user]' ");
    $data_iduser = mysqli_fetch_array($id_user);

    $pesanan = mysqli_query($koneksi,"SELECT * FROM pesanan WHERE id_user = '$data_iduser[nama]'");
?>
<br><br><br><br><br>
<div class="container">
    <div class="pesanan">
        <div class="header">
            <h1>Pesanan</h1>
        </div>

        <div class="container-fluid">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pesanan</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <?php 
                $no = 1;
                ?>
                <table class="display table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Banyak</th>
                            <th>Tgl. Pesan</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    while ($data_pesanan = mysqli_fetch_array($pesanan)) {
                        $brg = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang = '$data_pesanan[id_barang]' ");
                        $data_brg = mysqli_fetch_array($brg);
                    ?>
                        <tr>
                            
                            <td><?php echo $no; $no++ ?> </td>
                            <td style="text-align: center;"><?php echo "<img style=' border-radius: 10px' src='assets/img/barang/$data_brg[img_barang]' width='100' />";?></td>
                            <td><?php echo $data_brg['nama_brg'] ?></td>
                            <td><?php echo $data_pesanan['total_barang'] ?></td>
                            <td><?php echo $data_pesanan['tgl_transaksi'] ?></td>
                            <td><?php echo "Rp " . number_format($data_pesanan['total_transaksi'],2,',','.'); ?></td>
                            <?php 
                            if ($data_pesanan['status'] == 'approved') { ?>
                                <td style="color: green;"><?php echo $data_pesanan['status'] ?></td>
                            <?php }else if($data_pesanan['status'] == 'not approved'){ ?>
                                <td style="color: red;"><?php echo $data_pesanan['status'] ?></td>
                            <?php } else {?>
                                <td style="color: blue;"><?php echo $data_pesanan['status'] ?></td>
                            <?php }; ?>
                            <td>
                                <a <?php echo "href='lib/hapus.php?id=$data_pesanan[id_pesanan]'" ?> onclick="return confirm('Anda yakin mau menghapus item ini ?')" ><button type="button" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                            </td>
                        </tr>
                    <?php }; ?>
                    </tbody>
                </table>
                </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        
    </div>
</div>

