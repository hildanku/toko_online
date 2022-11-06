<?php 
require '../../../conf.php';
require '../../../lib/header.php';
          if(isset($_POST["submit"])) {
            $nama_produk = $_POST["nama"];
            $deskripsi_produk = $_POST["deskripsi"];
            $ukuran_produk = $_POST["ukuran"];
            $harga_produk = $_POST["harga"];
            $status_produk = $_POST["status"];
            $tanggal_input = date('Y-m-d H:i:s');
            
            $ext_diijinkan = array('png','jpg','jpeg');
            $foto = $_FILES['foto']['name'];
            $pecah = explode('.', $foto);
            $ext_filtrasi = strtolower(end($pecah));
             /* fungsi strtolower yaitu menjadikan setiap string menjadi huruf kecil,
                Contoh studi kasusnya adalah
                kita  mengupload gambar dengan nama dan ekstensi yang benar, contoh gambar.JPG
                nah karena ekstensi yang hanya kita perbolehkan hanya 3 ekstensi pada line 12, maka
                JPG tidak masuk ke dalam daftar ekstensi yang diijinkan, maka dari kita harus memvalidasi
                menggunakan function strtolower
             */
            $ukuran = $_FILES['foto']['size'];
            $file_tmp = $_FILES['foto']['tmp_name'];
            $err = $_FILES['foto']['error'];
            if($err === 4){
                echo "<p>Pilih file dulu</p>";
            }
            if(in_array($ext_filtrasi,$ext_diijinkan) === false ){
                echo "<p>Ekstensi tidak diijinkan</p>";
                die;
                $kodeajaib = uniqid();
                $kodeajaib .= '.';
                $kodeajaib .=  $ext_filtrasi;
                if($ukuran < 1044070){
                    move_uploaded_file($file_tmp, '../../assets/img/produk/'.$kodeajaib);
                }
            }

          }
          $input = "INSERT into produk VALUES ('','$nama_produk','$deskripsi_produk','$ukuran_produk','$harga_produk','$status_produk','$foto','$tanggal_input')";
          if(mysqli_query($conn, $input)){
            echo "Data Sukses di input";
            exit();
          } else {
            echo mysqli_error($conn);
            
          }
/*
Referensi Upload File
https://www.malasngoding.com/membuat-upload-file-dengan-php-dan-mysql/
*/
        
/*
    Error                                           | Problem
1. Error  Blank                                     | lupa ngeinclude file conf db wkwk SOLVED 4 NOV 2022
2. Column-count-doesnt-match-value-count-at-row-1   | jumlah field yang ada di database tidak sama dengan jumlah values yang di masukkan via script SOLVED 4NOV2022
// https://www.kaskus.co.id/thread/5188dd117e1243f24c000000/column-count-doesnt-match-value-count-at-row-1/
// CASE SOLVED 4 NOV 2022

*/

require  '../../../lib/footer.php';    
          ?>