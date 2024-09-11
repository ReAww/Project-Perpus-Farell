<center>
    <div class="page">

        <style>
            div.page {
                width: 90%;
                height: 100%;
                background-color: #f0f8ff;
                margin-top: 30px;
            }

            div.konten {
                text-align: left;
            }

            button.btn-add {
                background-color: #38a2ff;
                padding: 10px;
                margin: 15px 0 15px 0;
                border: 0;
                border-radius: 5px;
                box-shadow: 0 4px 7px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                color: white;
                font-size: 18px;
            }

            button.btn-add>i {
                vertical-align: middle;
                color: white;
            }

            div.popup {
                display: none;
                z-index: 1;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            div.overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
            }

            table {
                border: 2px solid black;
                border-collapse: collapse;
            }

            td,
            th {
                width: 200px;
                min-width: 10px;
                border: 1px solid black;
                padding: 8px;
            }

            th {
                font-weight: bold;
                background-color: #f2f2f2;
            }

            th.no {
                min-width: 10px;
            }
        </style>
        <div class="konten">
            <h1>Table Transaksi</h1>
            <p>Catatan : <br>Jika buku yang di pinjam Hilang, Rusak, atau terjadi sesuatu pada buku yang di pinjam &
                merugikan maka akan di kenakan Denda 10 kali lipat dari harga sewa<br>
                Jika buku yang di pinjam tidak kembali maka pihak perpustakaan akan datang dengan pihak berwajib ke
                alamat tertera</p>
            <button class="btn-add" onclick="showPopup()"><i class="material-icons">add_box</i>Tambah Transaksi</button>
        </div>
        <div class="popup" id="popup">
            <h2>Tambahkan Transaksi</h2>
            <form action="" method="post">
                <label for="nama_buku">Nama Buku:</label>
                <input type="text" id="nama_buku" name="nama_buku"><br><br>

                <label for="tgl_sewa">Tanggal Pinjam:</label>
                <input type="date" id="tgl_sewa" name="tgl_sewa"><br><br>
                <label for="tgl_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" id="tgl_pengembalian" name="tgl_pengembalian"><br><br>
                <label for="harga_sewa">Harga Sewa:</label>
                <input type="number" id="harga_sewa" name="harga_sewa"><br><br>
                <label for="jumlah_sewa">Jumlah Sewa:</label>
                <input type="number" id="jumlah_sewa" name="jumlah_sewa"><br><br>
                <input type="submit" value="Simpan" name="simpan">
            </form>

            <?php
            if (isset($_POST['simpan'])) {
                $conn = mysqli_connect("localhost", "root", "", "rellperpus");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $nama_buku = $_POST['nama_buku'];
                $tgl_sewa = $_POST['tgl_sewa'];
                $tgl_pengembalian = $_POST['tgl_pengembalian'];
                $harga_sewa = $_POST['harga_sewa'];
                $jumlah_sewa = $_POST['jumlah_sewa'];

                $sql = "INSERT INTO transaksi (nama_buku, tgl_sewa, tgl_pengembalian, harga_sewa, jumlah_sewa) VALUES ('$nama_buku', '$tgl_sewa', '$tgl_pengembalian', '$harga_sewa', '$jumlah_sewa')";
                if ($conn->query($sql) === TRUE) {
                    echo "Data berhasil disimpan";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
            ?>
            <button onclick="hidePopup()">Close</button>
        </div>

        <div class="overlay" id="overlay">
        </div>

        <script>
            function showPopup() {
                document.getElementById("popup").style.display = "block";
                document.getElementById("overlay").style.display = "block";
            }

            function hidePopup() {
                document.getElementById("popup").style.display = "none";
                document.getElementById("overlay").style.display = "none";
            }
        </script>

        <table>
            <tr>
                <th style="width: 5%;">No</th>
                <th>Nama Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Pengembalian</th>
                <th>Harga Sewa</th>
                <th>Jumlah Sewa</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "rellperpus");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id_buku, nama_buku, id_peminjam, nama_peminjam, telp_peminjam, alamat_peminjam, tgl_sewa, tgl_pengembalian, harga_sewa, jumlah_sewa from transaksi";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no . "</td>
                            <td>" . $row["nama_buku"] . "</td>
                            <td>" . $row["tgl_sewa"] . "</td>
                            <td>" . $row["tgl_pengembalian"] . "</td>
                            <td>" . $row["harga_sewa"] . "</td>
                            <td>" . $row["jumlah_sewa"] . "</td>
                        </tr>";
                    $no++;
                }
            } else {
                echo "0 result";
            }
            $conn->close();
            ?>
        </table>
    </div>
</center>