<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Mitra</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Mitra</li>
        </ol>
    </div>
    <div class="container-fluid">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Mitra</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" id="datamitra">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Opsi</th>
                        </tr>
                    </thead>

                    
                    <tbody>
                    <?php 
                        $no = 1;
                        $qtampil = mysqli_query($koneksi,"SELECT * FROM `user` WHERE level = 'user'");
                        while($data = mysqli_fetch_array($qtampil)) {
                    ?>

                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td ><?php echo $data['username_user']?></td>
                        <td><?php echo $data['email_user']; ?></td>
                        <td>
                            <a <?php echo "href='?page=editmitra&id=$data[id_user]'" ?>><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                            <a <?php echo "href='lib/proses/hapus_mitra.php?id=$data[id_user]'" ?> onclick="return confirm('Anda yakin mau menghapus item ini ?')" ><button type="button" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                        </tr>
                    
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
</main>