<?php  

if(isset($_SESSION['level'])){
    $_SESSION['level'] = $_SESSION['level']; 
    }else{
        $_SESSION['level'] = "";
    }
?>
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="?page=home">Baju<span class="kita">Kita</span></a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="?page=home#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="?page=home#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="?page=stokproduk">Stok</a></li>
                        <?php  
                        
                        if ($_SESSION['level'] == 'user') { ?>
                            <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="?page=order">Order</a></li>
                            <li class="nav-item mx-0 mx-lg-2 dropdown">
                                <a class="nav-link py-1 px-2 px-lg-1 rounded dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <?php echo $_SESSION['username_user'] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="?page=pesananku"><i class="fas fa-shopping-cart"></i> Pesanan</a>
                                    <hr>
                                    <a class="dropdown-item" href="lib/proses_logout.php">Log Out</a>
                                </div>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-1 px-2 px-lg-1 rounded js-scroll-trigger" href="lib/login.php">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>