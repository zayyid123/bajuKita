
<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio Produk</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item -->
                    <?php  
                        $qtampil = mysqli_query($koneksi,"SELECT * FROM barang");
                        $ulangi = 1;
                        while($data = mysqli_fetch_array($qtampil)) {
                            if ($ulangi < 7) {
                                echo "
                                <div class='col-md-6 col-lg-4 mb-5'>
                                <div class='portfolio-item mx-auto' data-toggle='modal' data-target='#portfolioModal$ulangi'>
                                        <div class='portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100'>
                                            <div class='portfolio-item-caption-content text-center text-white'><i class='fas fa-plus fa-3x'></i></div>
                                        </div>
                                        <img class='img-fluid' style=' border-radius: 10px' src='assets/img/barang/$data[img_barang]' />
                                    </div>
                                </div>
                                ";
                                $ulangi++;
                            }
                        };
                    ?>
                </div>
            </div>
        </section>