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
        <h1 class="mt-4">Tambah Data Barang</h1>
        <ol class="breadcrumb mb-4">
            <a href="?page=databarang"><li style="padding-right: 3px">Data Barang </li></a>
            <li style="padding-right: 3px" ><i class="fas fa-caret-right"></i></li>
            <li class="breadcrumb-item active"> Tambah Data Barang</li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center form_saya">
            <div class="col-lg-6 form_dalam">
                <form action="lib/proses/proses_tambah.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" >
                    <div class="form-group">
                        <label for="namabarang1">Nama Barang</label>
                        <input type="text" class="form-control" name="nama" id="namabarang1" placeholder="Masukkan Nama Barang" require>
                    </div>
                    <div class="form-group">
                        <label for="stok1">Stok Barang</label>
                        <input type="number" min="1" class="form-control" name="stok" id="stok1" placeholder="Masukkan Stok Barang" require>
                    </div>
                    <div class="form-group">
                        <label for="Harga1">Harga Barang</label>
                        <input type="number" min="1000" class="form-control" name="harga" id="Harga1" aria-describedby="deskrip" placeholder="Masukkan Harga Barang" require>
                        <small id="deskrip" class="form-text text-muted">Tuliskan nominal tanpa tanda baca ex. 60000</small>
                    </div>
                    <div class="form-group">
                        <label for="kategori1">Pilih Kategori</label>
                        <select class="form-control" id="kategori1" name="kategori">
                            <?php 
                            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                            while($dataktgr = mysqli_fetch_array($kategori)) {
                            ?>
                            <option><?php echo $dataktgr['id_kategori']." - ".$dataktgr['nama_kategori'] ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar1">Data Gambar</label>
                        <input type="file" class="form-control-file" name="gambar" id="gambar1" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</main>