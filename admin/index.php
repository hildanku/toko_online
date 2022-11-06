<?php
require('../conf.php');
require('../lib/header_admin.php');
?>
<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
    header("location: ../login.php");
    exit;
}
?>
<?php
$cek_akun = mysqli_query($conn, "SELECT * FROM users ");
while ($data_akun = mysqli_fetch_assoc($cek_akun)) {
?>
<span class="badge bg-primary">Welcome! <?php echo $data_akun['nama']; ?></b> Anda telah login sebagai <b><?php echo $data_akun['hak_akses']; ?></b> </span>
               <?php
               } 
               ?>
               <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
             
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-md-12">
                        <br />
                    </div>
                </div>
<?php
require('../lib/footer.php');
?>