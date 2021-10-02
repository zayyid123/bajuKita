<?php 
$qtampil = mysqli_query($koneksi,"SELECT * FROM barang");

?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Barang</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Barang</li>
        </ol>
    </div>
            <div class="container-fluid">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Barang</h6>
                </div>
                <div class="card-body">
                    <a <?php echo "href='?page=tambahbarang'" ?>><button type="button" class="btn btn-primary">Tambah Barang</button></a>
                    <br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" id="databarang">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Opsi</th>
                        </tr>
                    </thead>

                    

                    <tbody>
                    <?php 
                        $no = 1;
                        while($data = mysqli_fetch_array($qtampil)) {
                    ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td style="text-align:center; "><?php echo "<img style=' border-radius: 10px' src='../../assets/img/barang/$data[img_barang]' width='100' />";?></td>
                        <td><?php echo $data['nama_brg']; ?></td>
                        <td><?php echo $data['stok_brg']; ?></td>
                        <td id="dengan-rupiah"><?php echo "Rp " . number_format($data['harga_brg'],2,',','.'); ?></td>
                        <td>
                            <a <?php echo "href='?page=editbarang&id=$data[id_barang]'" ?> ><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                            <a <?php echo "href='lib/proses/hapus_barang.php?id=$data[id_barang]'" ?> onclick="return confirm('Anda yakin mau menghapus item ini ?')" ><button type="button" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                        </tr>
                    
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
</main>