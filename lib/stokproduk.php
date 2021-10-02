    <!-- Begin Page Content -->
    <style>
    .container-fluid{
        color: #2c3e50;
    }

    .header h1{
        text-align: center;
    }
    </style>
    <br><br><br><br><br>
            <div class="container-fluid">
                <div class="header">
                    <h1>Data Barang</h1>
                </div>
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Barang</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-bordered" width="100%" cellspacing="0" id="stokuser">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga</th>
                            </tr>
                        </thead>

                        

                        <tbody>
                        <?php 
                            $no = 1;
                            $qtampil = mysqli_query($koneksi,"SELECT * FROM barang");
                            while($data = mysqli_fetch_array($qtampil)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td style="text-align:center; "><?php echo "<img style=' border-radius: 10px' src='assets/img/barang/$data[img_barang]' width='100' />";?></td>
                                <td><?php echo $data['nama_brg']; ?></td>
                                <td><?php echo $data['stok_brg']; ?></td>
                                <td id="dengan-rupiah"><?php echo "Rp " . number_format($data['harga_brg'],2,',','.'); ?></td>
                            </tr>
                        
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



        

        <script type="">
                /* Dengan Rupiah */
            var dengan_rupiah = document.getElementById('dengan-rupiah');
            dengan_rupiah.addEventListener('keyup', function(e)
            {
                dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
            });
            
            /* Fungsi */
            function formatRupiah(angka, prefix)
            {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split    = number_string.split(','),
                    sisa     = split[0].length % 3,
                    rupiah     = split[0].substr(0, sisa),
                    ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                    
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
                
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
        </script>