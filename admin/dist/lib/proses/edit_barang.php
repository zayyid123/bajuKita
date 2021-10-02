<?php
	include '../../lib/koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM barang where id='$id'");
?>

<style>
.form_saya{
    background-color: #6c757d;
    margin: 20px;
    padding: 30px;
    border-radius: 10px
}

.form_dalam{
    background-color: white;
    padding: 20px;
    border-radius: 10px;
}
</style>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data Barang</h1>
        <ol class="breadcrumb mb-4">
            <a href="?page=databarang"><li style="padding-right: 3px">Data Barang </li></a>
            <li style="padding-right: 3px" ><i class="fas fa-caret-right"></i></li>
            <li class="breadcrumb-item active"> Edit Data Barang</li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center form_saya">
            <div class="col-lg-6 form_dalam">
                <?php 
                $barangku = mysqli_query($koneksi,"SELECT * FROM `barang` WHERE id_barang = '$id'");
                while($databarang = mysqli_fetch_array($barangku)) {
                ?>
                <form action="lib/proses/update_barang.php" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="id" class="form-control" id="id1" placeholder="Masukkan id" value="<?php echo $databarang['id_barang']; ?>">
                    <div class="form-group">
                        <label for="namabarang1">Nama Barang</label>
                        <input type="text" name="nama" class="form-control" id="namabarang1" placeholder="Masukkan Nama Barang" value="<?php echo $databarang['nama_brg']; ?>" require>
                    </div>
                    <div class="form-group">
                        <label for="stok1">Stok Barang</label>
                        <input type="number" name="stok" min="0" class="form-control" id="stok1" placeholder="Masukkan Stok Barang" value="<?php echo $databarang['stok_brg']; ?>" require>
                    </div>
                    <div class="form-group">
                        <label for="Harga1">Harga Barang</label>
                        <input type="number" name="harga" min="1000" class="form-control" id="Harga1" aria-describedby="deskrip" placeholder="Masukkan Harga Barang" value="<?php echo $databarang['harga_brg']; ?>" require>
                        <small id="deskrip" class="form-text text-muted">Tuliskan nominal tanpa tanda baca ex. 60000</small>
                    </div>
                    <div class="form-group">
                        <label for="kategori1">Pilih Kategori</label>
                        <select class="form-control" name="kategori" id="kategori1">
                            <?php 
                            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                            while($dataktgr = mysqli_fetch_array($kategori)) {
                            ?>
                            <?php 
                            if ($databarang['id_kategori'] == $dataktgr['id_kategori']) { ?>
                                <option selected="selected"><?php echo $dataktgr['id_kategori']." - ".$dataktgr['nama_kategori'] ?></option>
                            <?php }else{?>
                                <option><?php echo $dataktgr['id_kategori']." - ".$dataktgr['nama_kategori'] ?></option>
                            <?php }; ?>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar1">Data Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" id="gambar1">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</main>