<div class="col-12">
    <div class="invoice p-3 mb-3">
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"><?= $title ?></i>
                    <small class="float-right">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12 table-responsive">
            <table class="table table-stripped">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Qty </th>
                <th>Harga</th>
                <th>Total Harga</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $sub_total = 0;
                    foreach ($laporan as $key => $value) 
                    {   $total_harga = $value->jumlah * $value->harga;
                        $sub_total   = $sub_total+ $total_harga;?>
                    
                        <tr>
                        <td><?= $value->id?></td>
                        <td><?= $value->namaproduk?></td>
                        <td><?=     number_format($value->jumlah,0,',','.') ?></td>
                        <td>Rp.<?=  number_format($value->harga,0,',','.') ?></td>
                        <td>Rp.<?=  number_format($total_harga,0,',','.') ?></td>
                        </tr>
                   <?php }?>
                </tbody>
                </table>
                <h2><strong>Total Harga:</strong> Rp.<?=  number_format($sub_total,0,',','.') ?></h2>
            
            </div>
        </div>
        <div class="row no-print">
        <div class="col-12">
            <button type="submit" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i>Print</a>
        </div>
        </div>
    </div>
</div>