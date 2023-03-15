<div class="container-fluid">
<div class="card" style="width: 18rem;">
   <div class="card-body">
    <h5 class="card-title">Detail Produk</h5>
    <?php foreach ($produk as $prodk): ?>
 <div class="row">
      <div class="col-md-8">
          <img src="<?php echo base_url().'/uploads/'.$prodk->gambar ?> " class="card-img-top">
      </div>
      </div>
     <div class="col-md-8"> 
          <table class="table ">
              <tr>
                  <td>Nama Produk</td>
                  <td><strong><?php echo $prodk->namaproduk ?></strong></td>
              </tr>
              <tr>
                  <td>Keterangan</td>
                  <td><strong><?php echo $prodk->deskripsi ?></strong></td>
              </tr>
              <tr>
                  <td>Kategori</td>
                  <td><strong><?php echo $prodk->namakategori ?></strong></td>
               </tr>
               <tr>
                  <td>Stok</td>
                  <td><strong><?php echo $prodk->stok ?></strong></td>
              </tr>
              <tr>
                  <td>Harga</td>
                  <td><strong><div class="btn btn-sm btn-success">Rp.<?php echo number_format($prodk->hargaafter,0,',','.') ?></div></strong></td>
              </tr>
          </table>
       </div>
       <?php echo anchor('dashboard/tambah_ke_keranjang/'.$prodk->idproduk
           ,'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>')?>
        <?php echo anchor('welcome','<div class="btn btn-sm btn-danger">Kembali</div>')?>
   </div>
  <?php endforeach; ?>
</div>
</div>