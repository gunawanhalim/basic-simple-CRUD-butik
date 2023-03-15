<div class="container-fluid">
    <h3><i class="fas fa-edit"> Edit data kategori </i></h3>
    <?php 
    foreach ($kategori as $prodk) : ?>
     <form action="<?php echo base_url().'admin/data_kategori/update'?> " method="post" enctype="multipart/form-data">
     <div class="form-group">
         <label >Nama Kategori</label>
         <input type="hidden" name="idkategori" class="form-control" value="<?php echo $prodk->idkategori ?>">
         <input type="text" name="namakategori" class="form-control" value="<?php echo $prodk->namakategori ?>">
         </div>
    <div class="form-group">
     <button type="submit" class="btn btn-primary btn-sm">Simpan</button> 
    </div>
     </form>
    <?php endforeach ?>
</div> 