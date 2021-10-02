<main>
    <div class="container-fluid">
        <h1 class="mt-4">Pesanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pesanan</li>
        </ol>
    </div>
    <div class="container-fluid">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pesanan</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" id="datapesanan">
                    <thead>
                        <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Qty.</th>
                        <th>Tgl.Pesan</th>
                        <th>Total</th>
                        <th>Pemesan</th>
                        <th>Status</th>
                        <th>Opsi</th>
                        </tr>
                    </thead>

                    

                    <tbody>
                    <?php 
                        $no = 1;
                        $qtampil = mysqli_query($koneksi,"SELECT * FROM pesanan ");
                        while($data = mysqli_fetch_array($qtampil)) {
                            $user = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$data[id_user]'");
                            $data_user = mysqli_fetch_array($user);
                            $brg = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang = '$data[id_barang]'");
                            $data_brg = mysqli_fetch_array($brg);
                    ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo "<img style=' border-radius: 10px' src='../../assets/img/barang/$data_brg[img_barang]' width='100' />";?></td>
                        <td><?php echo $data_brg['nama_brg'] ?></td>
                        <td><?php echo $data['total_barang'] ?></td>
                        <td><?php echo $data['tgl_transaksi']; ?></td>
                        <td><?php echo "Rp " . number_format($data['total_transaksi'],2,',','.'); ?></td>
                        <td ><?php echo $data_user['username_user']?></td>
                            <?php 
                            if ($data['status'] == 'approved') { ?>
                                <td style="color: green;"><?php echo $data['status'] ?></td>
                            <?php }else if($data['status'] == 'not approved'){ ?>
                                <td style="color: red;"><?php echo $data['status'] ?></td>
                            <?php } else {?>
                                <td style="color: blue;"><?php echo $data['status'] ?></td>
                            <?php }; ?>
                        <td>
                            <?php 
                            if ($data['status'] == 'waiting') {?>
                                <a <?php echo "href='lib/proses/approved.php?id=$data[id_pesanan]&idbrg=$data_brg[id_barang]'" ?> onclick="return confirm('Anda yakin ingin menyetujui pesanan ini ?')"><button type="button" class="btn btn-success">Approve</button></a>
                                <a <?php echo "href='lib/proses/not_approved.php?id=$data[id_pesanan]'" ?> onclick="return confirm('Anda yakin ingin menolak pesanan ini ?')"><button type="button" class="btn btn-warning">Not</button></a>
                                <a <?php echo "href='lib/proses/hapus_pesanan.php?id=$data[id_pesanan]'" ?> onclick="return confirm('Anda yakin mau menghapus pesanan ini ?')" ><button type="button" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                            <?php } else {?>
                                <a <?php echo "href='lib/proses/hapus_pesanan.php?id=$data[id_pesanan]'" ?> onclick="return confirm('Anda yakin mau menghapus pesanan ini ?')" ><button type="button" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                            <?php }; ?>
                        </td>
                        </tr>
                    <?php }; ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
</main>