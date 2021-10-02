<?php
	include '../../lib/koneksi.php';
	$id = $_GET['id'];
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
        <h1 class="mt-4">Edit Data Mitra</h1>
        <ol class="breadcrumb mb-4">
            <a href="?page=datamitra"><li style="padding-right: 3px">Data Mitra </li></a>
            <li style="padding-right: 3px" ><i class="fas fa-caret-right"></i></li>
            <li class="breadcrumb-item active"> Edit Data Mitra</li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center form_saya">
            <div class="col-lg-6 form_dalam">
                <?php 
                $userku = mysqli_query($koneksi,"SELECT * FROM `user` WHERE id_user = '$id'");
                while($datauser = mysqli_fetch_array($userku)) {
                ?>
                <form method="POST" action="lib/proses/update_mitra.php" >
                    <input type="hidden" name="id" class="form-control" id="id1" placeholder="Masukkan id" value="<?php echo $datauser['id_user']; ?>">
                    <div class="form-group">
                        <label for="nama1">Username</label>
                        <input type="text" name="username" class="form-control" id="nama1" placeholder="Masukkan Username" value="<?php echo $datauser['username_user']; ?>" require>
                    </div>
                    <div class="form-group">
                        <label for="email1">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email1" placeholder="Masukkan E-mail" value="<?php echo $datauser['email_user']; ?>" require>
                    </div>
                    <div class="form-group">
                        <label for="Harga1">Password</label>
                        <input type="password" name="pass" class="form-control" id="Harga1" placeholder="Masukkan Password" value="<?php echo $datauser['password_user']; ?>" require>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</main>