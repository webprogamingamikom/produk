<?php   

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manajemen
            <small>Produk</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Produk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Tambah Produk</h3>
              </div>
			        <form class="form-horizontal" action="../admin/module/produk/aksi_simpan.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                        <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-10">           
                      <select class="form-control" name="idKategori">
                                <?php
                include "../lib/koneksi.php";
                $kueriKategori= $mysqli->query("select * from tbl_kategori");
                while($kat=mysqli_fetch_array($kueriKategori)){
                ?>
                        <option value="<?php echo $kat['id_kategori_produk']; ?>"><?php echo $kat['nama_kategori']; ?></option>
                  <?php } ?>   
                      </select>
                    </div>
                    </div>
                                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Merek</label>
                      <div class="col-sm-10">
                      <select class="form-control" name="idMerek">
                  <?php
                $kueriMerek= $mysqli->query("select * from tbl_merek");
                while($mer=mysqli_fetch_array($kueriMerek)){
                ?>
                        <option value="<?php echo $mer['id_merek']; ?>"><?php echo $mer['nama_merek']; ?></option>
                  <?php } ?>                  
                      </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk">
                      </div>
                    </div>
                          <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-10">
                      <input type="file" id="gambar" name="gambar">
                      </div>
                    </div>
                        <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Produk</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Harga Produk</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk">
                      </div>
                    </div>
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Slide</label>
                       <div class="col-sm-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="slide" id="slide" value="Y">
                         Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="slide" id="slide" value="N">
                          Tidak
                        </label>
                      </div>
                   </div>
                    </div>
                            <div class="form-group">
                       <label for="inputEmail3" class="col-sm-2 control-label">Produk Rekomendasi</label>
                       <div class="col-sm-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="rekomendasi" id="rekomendasi" value="Y">
                         Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="rekomendasi" id="rekomendasi" value="N">
                          Tidak
                        </label>
                      </div>
                   </div>
                    </div> 
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
			</div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php } ?>