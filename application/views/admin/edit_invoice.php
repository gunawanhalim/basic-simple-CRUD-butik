<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover tabel-striped">
        <tr>
            <th>No Invoice</th>
            <th>konfirmasi Pembayaran</th>

        </tr>
        <?php foreach ($invoice as $inv): ?>
            <tr>
                <?php echo form_open('admin/invoice/konfirmasi')?>
                <td>
                    <input type="text" name="id" value="<?php echo $inv->id?>">
                </td>
                <td>
                    <select name="konfirmasi" id="konfirmasi" class="form-control">
                        <option >Terima Pembayaran</option>
                        <option >Belum Membayar</option>
                        <!-- <option value="<?php echo $inv->konfirmasi?>"> <?php echo $inv->konfirmasi?></option> -->
                    </select>
                </td>
                <tr>
                    <td>
                    <button class="btn btn-sm btn-success" type="submit">Konfirmasi</button>
                    </td>
                </tr>
                
            </tr>
        <?php endforeach; ?>
    </table>
</div>