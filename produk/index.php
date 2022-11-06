<?php
    require('../conf.php');
    require('../lib/header.php');
?>

<!-- <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <img src="http://localhost/assets/img/project1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Netflix Premium</h5>
          <p class="card-text">Netflix 30Day Garansi Lifetime, jereee.</p>
          <a href="#" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div> -->

 
    <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
            </ol>
          </nav>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        								<?php
												$checkData = mysqli_query($conn, "SELECT * FROM produk ");
												while ($getData = mysqli_fetch_assoc($checkData)) {
												?>
        <div class="col">
          <div class="card shadow-sm">
            <img class="img-fluid bd-placeholder-img card-img-top" src="<?= $config['web']['url']; ?>/assets/img/produk/<?= $getData['foto_produk']; ?>" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail">
                        
            <div class="card-body">
              <h6><?= $getData['nama_produk']; ?></h6>
              <small><?= $getData['deskripsi_produk']; ?></small>
              <div class="d-flex justify-content-between align-items-center">
                <?php 
                $label_status_produk = $getData['status_produk'];
                if($label_status_produk != "Sold Out"){ // 14 OCT masalah di operator relasi https://www.petanikode.com/php-operator/
                    $label = "badge bg-success";
               } 
                else {
                  $label = "badge bg-danger";
                }
                  ?>
                <div class="btn-group">
                     <br />
                <small>
                  <span class="<?= $label; ?>"><?= $getData['status_produk']; ?>
                  </span>
                </small>
                </div>
                <?php
             
              ?>
                <a type="button" class="btn btn-sm btn-outline-primary" href="lihat.php?id=<?= $getData['id']; ?>">Lihat Produk</a>
              </div>
            </div>
          </div>
        </div>
                        <?php
												}
												?>
      </div>
    </div>
  <br />
  <br />
  <br />
  <?php 
    require('../lib/footer.php');
    ?> 