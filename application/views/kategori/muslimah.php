<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url('assets/img/slider1.png')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/img/slider2.png')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/img/slider1.jpg')?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   <div class="row text-center mt-4">
      <?php foreach($muslimah as $row): ?>
        <div class="card ml-3 mt-3" style="width: 16rem;">
         <img src="<?php echo base_url().'/uploads/'.$row->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-title"><?php echo $row->namaproduk ?></h5>
           <small> <?php echo $row->deskripsi ?></small><br>
           <span class="badge badge-pill badge-success">Rp. <?php echo number_format($row->hargaafter,0,',','.') ?></span>
           
           <?php echo anchor('dashboard/tambah_ke_keranjang/'.$row->idproduk
           ,'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>')?>
          <?php echo anchor('dashboard/detail/'.$row->idproduk
           ,'<div class="btn btn-sm btn-success">Detail</div>')?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>
