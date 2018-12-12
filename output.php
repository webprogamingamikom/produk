div class="album py-5 bg-light">
        <div class="container">
          <h3 class="text-left">Produk Terpopuler</h3><hr>
          <div class="row">
            <div class="col-md-4">
                <?php
                $query = $mysqli->query("select * from tbl_produk");
                while($val=mysqli_fetch_array($query)){
                ?>
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?php echo $val['isi dengan field pada table tsb']; ?>">
                <div class="card-body">
                  <p class="card-text"><h4 align="center"><b>Rp. 1.250.000,-</b></h4>
                    <br><p align="center">Sepeda BMX Poligon Razor Pro</p></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                      <button type="button" class="btn btn-sm btn-outline-danger">Bid</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
       