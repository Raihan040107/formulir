<?php



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <style>
        .form-container {
            border: 2px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            background-color: #f9f9f9;
        }

        .submit-button {
            color: #000;
            background: #E9967A;
            color: whitesmoke;
            padding: 8px 20px;
            border: 1px solid;
            border-radius: 50px;
            font-family: 'Helvetica';
        }

        h1 {
            font-family: 'Poppins';
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            border: 1px solid #ccc;
            padding: 5px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="form-container">
    <form method="POST" action="proformpendaftaran1.php" onsubmit="return validasiForm()">
        <table align="center" cellpadding="1" cellspacing="8">
            <center>
                <h1>FORMULIR PENDAFTARAN<br>
                    LOMBA VOLY<br>
                    ANTAR RT RW</h1>
            </center>
            <tr>
                <td>NAMA TIM</td>
                <td>:</td>
                <td></td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Timmu" style="width: 70%;"
                           id="namtim" required></td>
            </tr>
            <tr>
                <td>JUMLAH ANGGOTA</td>
                <td>:</td>
                <td></td>
                <td><input type="number" name="jumlah" placeholder="Masukkan Jumlah Anggota Timmu"
                           style="width: 70%;" id="jumang" required></td>
            </tr>
            <tr>
                <td>ASAL</td>
                <td>:</td>
                <td>RT</td>
                <td><input type="number" name="rt" placeholder="Masukkan Asal RT" style="width:70%;" id="rt"
                           required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>RW</td>
                <td><input type="number" name="rw" placeholder="Masukkan Asal RW" style="width:70%;" id="rw"
                           required>
                </td>
            </tr>
            <tr>
                <td>NAMA KETUA TIM</td>
                <td>:</td>
                <td></td>
                <td><input type="text" name="namaket" placeholder="Masukkan Nama Ketua Timmu" style="width: 70%;"
                            id="namket" required></td>
            </tr>
            <tr>
                <td>NOMOR HP KETUA TIM</td>
                <td>:</td>
                <td></td>
                <td><input type="text" name="nomorhp" placeholder="Masukkan Nomor HP" style="width: 70%;"
                             id="nohp" required></td>
            </tr>
            <tr>
                <td>UPLOAD FOTO KTP KETUA TIM</td>
                <td>:</td>
                <td></td>
                <td><input class="input" type="file" id="foto" name="foto" required></td>
            </tr>
            <tr>
                <td>TANGGAL PENDAFTARAN</td>
                <td>:</td>
                <td></td>
                <td><input type="date" name="tanggaL" style="width: 70%;" id="tangpen" required></td>
            </tr>
            <tr>
                <td>JENIS TIM</td>
                <td>:</td>
                <td></td>
                <td><input type="radio" name="jenis" value="Putra" required>Putra
                    <input type="radio" name="jenis" value="Putri" required>Putri<br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="KIRIM" class="submit-button">
                </td>
            </tr>
        </table>
    </form>
</div>
   <script>
        function validasiForm() {
            var nama = document.getElementById('namtim').value;
            var nomorHp = document.getElementById('nohp').value;
            var foto = document.getElementById('foto').files[0]; 

           
            if (nama == "" || !/^[a-zA-Z\s]+$/.test(nama)) {
                alert("Nama hanya boleh menggunakan huruf dan tidak boleh mengandung angka.");
                return false;
            }

            
            if (nomorHp.length > 11) {
                alert("Nomor HP maksimal 11 karakter.");
                return false;
            }

          
            if (!/^\d+$/.test(nomorHp)) {
                alert("Nomor HP hanya boleh berisi angka.");
                return false;
            }


            if (foto && foto.size > 2 * 1024 * 1024) {
                alert("Ukuran file foto tidak boleh lebih dari 2 MB.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
