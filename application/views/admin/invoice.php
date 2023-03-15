<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover tabel-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Pembayaran</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pemesanan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($invoice as $inv): ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td class="text-info font-weight-bold" ><?php echo $inv->konfirmasi?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td>
                    <?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary"> Detail </div>') ?>
                    <?php echo anchor('admin/invoice/edit/'.$inv->id,'<div class="btn btn-sm btn-warning"> Edit </div>') ?>
                    <?php echo anchor('admin/invoice/delete/'.$inv->id,'<div class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> </div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>