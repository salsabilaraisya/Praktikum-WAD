<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($connect, "SELECT * FROM showroom_mobil");
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            
            if ($query) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    $nama_mobil = $row['nama_mobil'];
                    $brand_mobil = $row['brand_mobil'];
                    $warna_mobil = $row['warna_mobil'];
                    $tipe_mobil =  $row['tipe_mobil'];
                    $harga_mobil = $row['harga_mobil'];
                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    
                    <td>' . $nama_mobil .'</td>
                    <td>'. $brand_mobil .'</td>
                    <td>' . $warna_mobil .'</td>
                    <td>' . $tipe_mobil .'</td>
                    <td>' . $harga_mobil .'</td>
                    <td><a href="form_detail_mobil.php?id=' . $id .'">LINK</a></td>
                    </tr>';
                }
            }

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>