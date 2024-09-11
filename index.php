<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan digital</title>
    <link rel="icon" type="image/x-icon" href="/image/logo6.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <div class="ContainerNavbar">
        <nav class="wrapper1">
            <div class="brand">
                <img class="logo6" src="image/logo6.png" alt="">
                <div class="firstname">Perpustakaan Digital</div>                
            </div>
            <ul class="navigation">                
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=galeri">Galeri</a></li>
                <li><a href="index.php?page=transaksi">Transaksi</a></li>
                <li><a href="index.php?page=koleksibuku">Koleksi</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                
                <li><a class="loginbtn" href="index.php?page=login"><label for="">Login</label></a></li>
            </ul>
        </nav>
    </div>

    <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page) {
                case 'galeri':
                    include "pages/galeri.php";
                    break;
                case 'transaksi';
                    include "pages/transaksi.php";
                    break;
                case 'koleksibuku';
                    include "pages/koleksibuku.php";
                    break;
                case 'about':
                    include "pages/about.php";
                    break;
                case 'contact':
                    include "pages/contact.php";
                    break;
                case 'home':
                    include "pages/home.php";
                    break;
                case 'login';
                    include "pages/login.php";
                    break;
            }
        }
        else{
            include "pages/home.php";
        }
        ?>
         <!-- FOOTER -->
    <footer>
        Perpustakaan digital | <i>SMK Negeri 6 Kota Bekasi</i><br>
        Author Web: Farell Rhezky
    </footer>
</body>
</html>