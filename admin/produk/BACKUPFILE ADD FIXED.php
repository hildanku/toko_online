<?php 
require '../../conf.php';
require '../../lib/header.php';
          if(isset($_POST["submit"])) {
            $nama_produk = $_POST["nama"];
            $deskripsi_produk = $_POST["deskripsi"];
            $ukuran_produk = $_POST["ukuran"];
            $harga_produk = $_POST["harga"];
            $status_produk = $_POST["status"];
            $tanggal_input = date('Y-m-d H:i:s');
            
   //         $foto_produk = $_POST["foto"];
            $ext = array('png','jpg','jpeg');
            $foto = $_FILES['foto']['name'];
            $pecah = explode('.', $foto);
            $ext2 = strtolower(end($pecah));
            $ukuran = $_FILES['foto']['size'];
            $file_tmp = $_FILES['foto']['tmp_name'];
            if(in_array($ext2,$ext) === true){
                if($ukuran < 1044070){
                    move_uploaded_file($file_tmp, '../../assets/img/produk/'.$foto);
                }
            }

          }
          $input = "INSERT into produk VALUES ('','$nama_produk','$deskripsi_produk','$ukuran_produk','$harga_produk','$status_produk','$foto','$tanggal_input')";
          if(mysqli_query($conn, $input)){
            echo "<script>alert('data sukses diinpt');</script>";
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

require  '../../lib/footer.php';    
          ?>