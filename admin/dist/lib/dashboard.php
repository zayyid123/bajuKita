                <?php 
                // penampil data pesanan
                $qtampilpsn = mysqli_query($koneksi,"SELECT count(*) AS jumlahpsn FROM pesanan");
                $datapsn = mysqli_fetch_array($qtampilpsn);

                // penampil data barang
                $qtampilbrg = mysqli_query($koneksi,"SELECT count(*) AS jumlahbrg FROM barang");
                $databrg = mysqli_fetch_array($qtampilbrg);

                // penampil data mitra
                $qtampilmtra = mysqli_query($koneksi,"SELECT count(*) AS jumlahmtra FROM user WHERE level = 'user'");
                $datamtra = mysqli_fetch_array($qtampilmtra);

                // chart
                include "chart.php";

                
                ?>
                
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        Pesanan
                                        <div class="banyak"><h1><?php echo $datapsn['jumlahpsn'] ?></h1></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=pesanan">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        Data Barang
                                        <div class="banyak"><h1><?php echo $databrg['jumlahbrg'] ?></h1></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=databarang">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        Data Mitra
                                        <div class="banyak"><h1><?php echo $datamtra['jumlahmtra'] ?></h1></div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=datamitra">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container row">
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Pesanan Per-Bulan
                                    </div>
                                    <div class="card-body"><canvas id="barchart" width="100%" height="30"></canvas></div>
                                </div>
                    </div>

                    
                </main>


                <!-- chart -->
        <script  type="text/javascript">
        var ctx = document.getElementById("barchart").getContext("2d");
        var data = {
                    labels: ["Januari", "Februari", "Maret", "April","Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November","Desember" ],
                    datasets: [
                    {
                    label: "Penjualan Barang",
                    data: [<?php echo $databln1['bln1'].",";
                                echo $databln2['bln2'].",";
                                echo $databln3['bln3'].",";
                                echo $databln4['bln4'].",";
                                echo $databln5['bln5'].",";
                                echo $databln6['bln6'].",";
                                echo $databln7['bln7'].",";
                                echo $databln8['bln8'].",";
                                echo $databln9['bln9'].",";
                                echo $databln10['bln10'].",";
                                echo $databln11['bln11'].",";
                                echo $databln12['bln12'].",";
                                ?> ],
                    backgroundColor: [
                        '#29B0D0',
                        '#2A516E',
                        '#F07124',
                        '#CBE0E3',
                        '#979193'
                    ]
                    }
                    ]
                    };

        var myBarChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: {
                    legend: {
                    display: false
                    },
                    barValueSpacing: 20,
                    scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    xAxes: [{
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }]
                    }
                }
                });
        </script>