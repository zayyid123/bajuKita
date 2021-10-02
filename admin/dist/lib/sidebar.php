        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- menu utama  -->
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="?page=dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- menu pengelolaan -->
                            <div class="sb-sidenav-menu-heading">Pengelolaan</div>
                            <a class="nav-link" href="?page=pesanan">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope-open-text"></i></div>
                                Pesanan
                            </a>
                            
                            <a class="nav-link" href="?page=databarang">
                                <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                                Data Barang
                            </a>
                            
                            <a class="nav-link" href="?page=datamitra">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Data Mitra
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['username_user'] ?>
                    </div>
                </nav>
            </div>