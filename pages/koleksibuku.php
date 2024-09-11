<center>
  <div class="page">
    <style>
      div.page {
        height: fit-content;
        margin-bottom: 60px;
      }

      div.gallery {
        margin: 5px;
        width: 200px;
        /* Lebar yang sama untuk semua buku */
        height: 320px;
        /* Tinggi yang sama untuk semua buku */
        padding: 5px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 7px 5px rgba(0, 0, 0, 0.1);
        display: inline-block;
      }

      div.gallery:hover {
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.2);
      }

      div.gallery img {
        width: 100%;
        height: 250px;
        /* Tinggi gambar yang sama */
        object-fit: cover;
        /* Memastikan gambar menutupi area yang ditentukan */
      }

      div.desc {
        padding: 10px;
        text-align: center;
        height: 50px;
        /* Tinggi deskripsi yang sama */
        overflow: hidden;
        /* Menyembunyikan teks yang melebihi tinggi */
        display: flex;
        align-items: center;
        justify-content: center;
      }
      div.konten-koleksi {
        margin: 20px;
        text-align: left;
      }
      /* Search */
      .search-input {
        display: flex;
        width: 200px;
        align-items: center;
        background-color: #ffffff;
        border-radius: 25px;
        padding: 5px 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .search-input input {
        border: none;
        background: transparent;
        padding: 8px;
        width: 100%;
        outline: none;
        font-size: 14px;
      }

      .search-input button {
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 5px;
      }

      .search-input i {
        color: #0766ba;
      }
    </style>
    <div class="konten-koleksi">
      <h1>Koleksi Buku</h1>
      <div class="search-input">
        <input type="text" placeholder="Cari...">
        <button type="submit"><i class="material-icons">search</i></button>
      </div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku1.jpg" alt="Alone True story">
      </a>
      <div class="desc">Alone True story</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku2.jpg" alt="Walk into the SHADOW">
      </a>
      <div class="desc">Walk into the SHADOW</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku3.jpg" alt="MEMORY">
      </a>
      <div class="desc">MEMORY</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku4.jpg" alt="A Million To One">
      </a>
      <div class="desc">A Million To One</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku5.png" alt="The Design of Books">
      </a>
      <div class="desc">The Design of Books</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku6.jpg" alt="The Book of Art">
      </a>
      <div class="desc">The Book of Art</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku7.jpg" alt="Guy Kawasaki">
      </a>
      <div class="desc">Guy Kawasaki</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku8.jpg" alt="The Way of the Nameless">
      </a>
      <div class="desc">The Way of the Nameless</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku9.jpg" alt="ART DESIGN">
      </a>
      <div class="desc">ART DESIGN</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku10.jpg" alt="MODERN SPACES">
      </a>
      <div class="desc">MODERN SPACES</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku11.jpg" alt="Pencil">
      </a>
      <div class="desc">Pencil</div>
    </div>
    <div class="gallery">
      <a>
        <img src="image/buku12.jpg" alt="BOOK TITLE">
      </a>
      <div class="desc">BOOK TITLE</div>
    </div>

  </div>
</center>