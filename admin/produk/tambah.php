<?php
require '../../conf.php';
require '../../lib/header.php';
?>
<div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah Produk
            </div>
            <div class="card-body">
              <form action="proses/tambah.php" method="POST"enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Produk" class="form-control">
                </div>
                <div class="form-group">
                  <label>Deskripsi Produk</label>
                  <textarea type="text" name="deskripsi" placeholder="Masukkan Deskripsi Produk" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label>Ukuran Produk</label>
                  <input type="text" name="ukuran" placeholder="Masukkan Ukuran Produk" class="form-control">
                </div>
                <div class="form-group">
                  <label>Harga Produk</label>
                  <input type="text" name="harga" placeholder="Masukkan Harga Produk" class="form-control">
                </div>
                <div class="form-group">
                  <label>Status Produk</label>
                    <select name="status" placeholder="Status produk">
                        <option value="In Stock"> Stok Tersedia </option>
                        <option value="Sold Out"> Barang Habis </option>
                    </select>
                </div>
<br />
                <div class="form-group">
                  <label>Foto Produk</label>
                  <input type="file" name="foto" placeholder="Masukkan Foto URL Produk "></input>
                </div>
                <br />
                <button type="submit" name="submit" value="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />


<?php
require '../../lib/footer.php';
?>
<!-- Thanks to CodePolitan -->