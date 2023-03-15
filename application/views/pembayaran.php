<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="btn btn-sm btn-primary">
            <?php 
            $grand_total=0;
            if ($keranjang = $this->cart->contents()) 
            {
                foreach ($keranjang as $item)
                {
                 $grand_total = $grand_total + $item['subtotal'];
                }
                echo "<h3>Total Belanja Rp.".number_format($grand_total,0,',','.');
            ?>
        </div><br><br>
        <h2> Input Alamat Pengiriman dan Pembayaran </h2>
        <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan"> 
        <div class="form-group">
            <label > Nama Lengkap </label>
            <input type="text" name="nama" placeholder="Nama Lengkap Anda"
            class="form-control">
        </div>
        <div class="form-group">
            <label > No. Telp/Wa </label>
            <input type="text" name="no_telp" placeholder="Nomor Telpon"
            class="form-control">
        </div>
       <div class="form-group">
            <label > Pilih BANK </label>
            <select class="form-control">
            <option > Mandiri - 901672821</option>
            <option > BCA - 130068729</option>
            <option > BNI - 5012345512</option>
            <option > BRI - 1827364562</option>
            <option > DANA - 085155306666</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mb-4 mt-4" > Pesan </button> 
        <?php 
        } else
        {
            echo "<h3>Keranjang belanja anda masih kosong";
        }
         ?>
        </form>
        
    </div>
</div>
</div>