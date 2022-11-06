<?php  //https://www.belajarwithib.my.id/2020/12/login-multi-user-php.html
include '../conf.php';
$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($conn,"SELECT from users WHERE username='$user' AND password='$pass'");
$jumlah_data = mysqli_num_rows($query);
if($jumlah_data > 0){
	$data = mysqli_fetch_assoc($jumlah_data);

        if($data['role']=="admin"){
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = "admin";
            //berfungsi mengalihkan ke halaman admin
            header("location:admin/index.php");
        }else if($data['role']=="member"){
            // berfungsi membuat session
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = "member";
            // berfungsi mengalihkan ke halaman moderator
            header("location:index.php");
    
        }else{
            // berfungsi mengalihkan alihkan ke halaman login kembali
            header("location:index.php?alert=gagal");
        }	
        }

?>