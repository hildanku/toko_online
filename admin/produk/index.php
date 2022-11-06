<?php
require '../../conf.php';
require '../../lib/header_admin.php';
?>
                        		
                        <div class="container">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Kelola Produk</h4>
<br />

                                    <table class="table">
                                        <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Ukuran Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Status Produk</th>
                                            <th>foto Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                 <?php
								$checkData = mysqli_query($conn, "SELECT * FROM produk ");
								while ($getData = mysqli_fetch_assoc($checkData)) {
								?> 
                                        <tbody>
                                        <tr>
                                            <th scope="row"><?= $getData['id']; ?></th>

                                            <td><?= $getData['nama_produk']; ?></td>
                                            <td><?= $getData['deskripsi_produk']; ?></td>
                                            <td><?= $getData['ukuran_produk']; ?></td>
                                            <td><?= $getData['harga_produk']; ?></td>
                                            <?php 
                                                $labelProduk = $getData['status_produk'];
                                                if($labelProduk != "Sold Out"){
                                                    $label = "badge bg-success";
                                                } 
                                                 else {
                                                   $label = "badge bg-danger";
                                                 }
                                                   ?>
                                            <td><span class="<?= $label; ?>"><?= $getData['status_produk']; ?></span></td>
                                            <td><img src="<?= $config['web']['url']; ?>/assets/img/produk/<?= $getData['foto_produk']; ?>" height="80" width="80"></img></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= $config['web']['url']; ?>admin/produk/ubah.php?id=<?= $getData['id']; ?>">Edit Data</a>
                                                <a class="btn btn-danger" href="<?= $config['web']['url']; ?>admin/produk/hapus.php?id=<?= $getData['id']; ?>">Edit Data</a>
                                            </td>
                                        </tr>
                                        <?php 
                                }
                                ?>
                                        </tbody>
                                
                                    </table>
                                </div>
                            </div>
                        </div>


<?php
require '../../lib/footer.php';
?>