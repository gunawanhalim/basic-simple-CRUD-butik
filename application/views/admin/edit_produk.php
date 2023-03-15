<div class="container-fluid">
    <h3><i class="fas fa-edit"> Edit data barang </i></h3>
    <?php 
    foreach ($produk as $prodk) : ?>
     <form action="<?php echo base_url().'admin/data_produk/update'?> " method="post" enctype="multipart/form-data">
     <div class="form-group">
         <label >Nama Produk</label>
         <input type="hidden" name="idproduk" class="form-control" value="<?php echo $prodk->idproduk ?>">
         <input type="text" name="namaproduk" class="form-control" value="<?php echo $prodk->namaproduk ?>">
         <label >Kategori</label>
         <input type="text" name="namakategori" class="form-control" value="<?php echo $prodk->namakategori ?>">
         <label >Deskripsi</label>
         <input type="text" name="deskripsi" class="form-control" value="<?php echo $prodk->deskripsi ?>">
         <label >Harga Before</label>
         <input type="text" name="hargabefore" class="form-control" value="<?php echo $prodk->hargabefore ?>">
         <label >Harga After</label>
         <input type="text" name="hargaafter" class="form-control" value="<?php echo $prodk->hargaafter ?>">
         <label >Warna</label>
         <input type="text" name="warna" class="form-control" value="<?php echo $prodk->warna ?>">
         <label >Ukuran</label>
         <select class="form-control" name="ukuran">
         <option>S </option>
         <option>M </option>
         <option>L </option>
         <option>XL </option></select>
         <label >Stok</label>
         <input type="text" name="stok" class="form-control" value="<?php echo $prodk->stok ?>">
         <!-- <label> Gambar </label>
        <input type="file" name="gambar" class="form-control"?> -->
        </div>
     <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
     </form>
    <?php endforeach ?>
</div> 