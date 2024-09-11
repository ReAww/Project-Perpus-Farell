<center><div class="page">
    <style>
            div.page {
                justify-content: center;
                align-items: center;
                height: 100%;
                margin: 10px 0;
                text-align: center;
            }

            /* Slider */
            .slider-container {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
                overflow: hidden;
                position: relative;
            }
            .slider {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }
            .slide {
                flex: 0 0 100%;
            }
            .slide img {
                width: 100%;
                height: 400px; /* Rasio 1:6 */
                object-fit: cover;
            }
            .slider-nav {
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
            }
            .slider-nav button {
                background: #fff;
                border: none;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                margin: 0 5px;
                cursor: pointer;
            }
            .slider-nav button.active {
                background: #333;
                width: 10px;
                height: 10px;
                border-radius: 50%;
            }

            /* isi homepage */
            .homepage {
            text-align: center;
            padding: 5px 20px;
        }
        
        .homepage h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        
        .fitur-utama {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        
        .fitur {
            width: 30%;
            box-shadow: 0 1px 16px rgba(0, 0, 0, 0.2);
            padding: 15px;
            margin: 0 10px 0 10px;
            border-radius: 15px;
        }
        
        .fitur i {
            font-size: 3em;
            margin-bottom: 15px;
        }
        
        .tombol-jelajahi {
            display: inline-block;
            margin-top: 40px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .tombol-jelajahi:hover {
            background-color: #0056b3;
        }
    </style>
    <body>
    <div class="homepage">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="image/perpustakaan.jpg" alt="Ruang Baca Utama">
                </div>
                <div class="slide">
                    <img src="image/perpus4.jpg" alt="Koleksi Produktif">
                </div>
                <div class="slide">
                    <img src="image/perpus2.jpg" alt="Area Buku Umum">
                </div>
            </div>
            <div class="slider-nav">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
        </div>

        <script>
            const slider = document.querySelector('.slider');
            const slides = document.querySelectorAll('.slide');
            const navButtons = document.querySelectorAll('.slider-nav button');
            let currentSlide = 0;

            function showSlide(index) {
                slider.style.transform = `translateX(-${index * 100}%)`;
                navButtons.forEach((button, i) => {
                    button.classList.toggle('active', i === index);
                });
                currentSlide = index;
            }

            navButtons.forEach((button, index) => {
                button.addEventListener('click', () => showSlide(index));
            });

            setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }, 5000);
        </script>
        <h1>Selamat Datang di Perpustakaan Digital</h1>
        <p>Temukan ribuan buku digital dalam genggaman Anda</p>
        
        <div class="fitur-utama">
            <div class="fitur">
                <i class="material-icons">search</i>
                <h3>Pencarian Mudah</h3>
                <p>Temukan buku yang Anda cari dengan cepat</p>
            </div>
            <div class="fitur">
                <i class="material-icons">book</i>
                <h3>Koleksi Lengkap</h3>
                <p>Ribuan judul buku dari berbagai genre</p>
                <a href="index.php?page=koleksibuku" class="tombol-jelajahi">Jelajahi Koleksi</a>
            </div>
            <div class="fitur">
                <i class="material-icons">devices</i>
                <h3>Akses Dimana Saja</h3>
                <p>Baca buku favorit Anda kapan saja, di mana saja</p>
            </div>
        </div>
        
    </div>
    </body>
</div></center>