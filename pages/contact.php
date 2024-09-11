<div class="page">
<style>
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }
        .contact-info, .contact-address, .contact-form {
            flex-basis: 30%;
            margin-bottom: 20px;
        }
        .contact-form form {
            display: flex;
            flex-direction: column;
            width: 90%;
        }
        .contact-form input, .contact-form textarea {
            margin-bottom: 10px;
            padding: 5px;
        }
        .contact-form button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .material-icons {
            vertical-align: middle;
            margin-right: 5px;
        }
    </style>
    <h2>Hubungi Kami</h2>
    <div class="contact-container">
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p><i class="material-icons">phone</i> Telp: +62 821 1285 6776</p>
            <p> WA: +62 858-1329-9089</p>
            <p><i class="material-icons">schedule</i> Jam Operasional: Senin - Jumat, 08.00 - 16.00 WIB</p>
        </div>
        <div class="contact-address">
            <h3>Alamat</h3>
            <p><i class="material-icons">location_on</i> Jl. Kusuma Utara I No. 17, Wisma Jaya,</p>
            <p>Kec. Bekasi Timur, Kota Bekasi</p>
            <p>Provinsi Jawa Barat, 17111</p>
        </div>
        <div class="contact-form">
            <h3>Kirim Pesan</h3>
            <form>
                <input type="text" placeholder="Nama" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Pesan" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>    
</div>