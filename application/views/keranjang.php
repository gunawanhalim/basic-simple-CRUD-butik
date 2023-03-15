<div class="container">
    <h4>Keranjang Belanja</h4>

 <table class="table table-bordered  table-stripped table-hover">
     <thead>
     <tr>
        <th> No </th>
        <th> Nama Produk </th>
        <th> Jumlah </th>
        <th> Harga  </th>
        <th> Sub-Total </th>
        <th class="text-center"> Actions</th>
        
    </tr>
     </thead>
    <?php $i = 1; ?>
    <?php 
    $idproduk=1;
    foreach($this->cart->contents() as $items) : ?>
    <?php echo form_open('dashboard/ubahCart');?>
    <tr>
        <td align="center"><?php echo $idproduk++ ?></td>
        <td><?php echo $items['name'] ?></td>
        <td align="center"> 
        <input type="hidden" name="<?php echo $i . '[rowid]'; ?>" id="id" value="<?php echo $items['id']; ?>"> 
        <input type="number" name="<?php echo $i . '[qty]'; ?>" id="qty" value="<?php echo $items['qty']; ?>" min="0" max="<?php echo $items['stok']; ?>" ></td>
        <td align="right">Rp.<?php echo number_format($items['price'],0,',','.')  ?></td>
        <td align="right">Rp.<?php echo number_format($items['subtotal'],0,',','.') ?></td>
        <td class="text-center">
        <a class="btn btn-danger btn-sm" href="<?= base_url('dashboard/deleteCart/' . $items['rowid']) ?>"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    <tr>
    
            
        <td colspan="4" align="right">
        Rp.<?php echo number_format($this->cart->total(),0,',','.') ?>
        </td>
    </tr>
 </table>
 
<div align="right">
    <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"> 
    <div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
    <a href="<?php echo base_url('welcome') ?>"> 
    <div class="btn btn-sm btn-primary">Lanjutkan Pembelanjaan</div></a>
    <button type="submit" class="btn btn-sm btn-success">Pembayaran </button>
            <?php echo form_close();?>

</div>
</div>
<!-- 
<script>
    $(document).ready(function(){
        $("#itemQty").on('change',function(){
            var el = $(this).closest('tr');
            var id = $(el).find('#id').val();
            var qty = $(this).val();

            $.ajax({
                'url' : 'ubahQty',
                'type' : "POST",
                'data' : {'id' : id, 'qty' : qty},
                success : function(result){
                    window.location.href = '';
                    // console.log(result);
                },
            });
        });
    });
</script> -->