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
      <?php foreach($produk as $rows): ?>
        <div class="card ml-3 mt-3" style="width: 14rem;">
         <img src="<?php echo base_url().'/uploads/'.$rows->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-title"><?php echo $rows->namaproduk ?></h5>
           <small> <?php echo $rows->deskripsi ?></small><br>
           <span class="badge badge-pill badge-success">Rp. <?php echo number_format($rows->hargaafter,0,',','.') ?></span>
           <!-- <input type="number" name="quantity" min="0" max="<?= $rows->stok?>" id="'. $rows->idproduk.'"> -->
           <?php echo anchor('dashboard/tambah_ke_keranjang/'.$rows->idproduk
           ,'<div class="btn btn-sm btn-primary mb-2 mt-2">Tambah ke keranjang</div>')?>
          <?php echo anchor('dashboard/detail/'.$rows->idproduk
           ,'<div class="btn btn-sm btn-success">Detail</div>')?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>
<!-- <script>
  $(document).ready(function(){
    $('.add_cart').click(function(){
      var idproduk = $(this).data("idproduk");
      var namaproduk = $(this).data("namaproduk");
      var harga = $(this).data("hargaafter");
      // var idproduk = $(this).data("idproduk");
      var quantity = $('#' + idproduk).val();
      if(quantity != '' && quantity >0)
      {
        $.ajax({
          url: "<?php base_url();?> dashboard/addCart",
          method: "POST",
          data: {
            idproduk : idproduk, namaproduk:namaproduk, harga:harga, quantity: quantity,
          },
          success: function(data){
            alert("Produk kamu telah di tambah ke dalam keranjang");
            $('#cart_details').html(data);
          },
        });
      }else{
        alert("Harap masukkan pesanan anda")
      }
    });
  });
</script> -->
