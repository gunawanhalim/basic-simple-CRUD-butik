<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4 " data-toggle="modal" data-target="#tambah_produk">
        <i class="fas fa-plus fa-sm"></i> Tambah Produk</button>
       
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Harga Before</th>
            <th>Harga After</th>
            <th>Warna</th>
            <th>Ukuran</th>
            <th>Stok</th>
            
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        $idproduk=1;
        foreach($produk as $prodk): ?>
        <tr>
            <td><?php echo $idproduk++ ?></td>
            <td><?php echo $prodk->namaproduk ?></td>
            <td><?php echo $prodk->deskripsi ?></td>
            <td><?php echo $prodk->namakategori ?></td>
            <td><?php echo $prodk->hargabefore ?></td>
            <td><?php echo $prodk->hargaafter ?></td>
            <td><?php echo $prodk->warna ?></td>
            <td><?php echo $prodk->ukuran ?></td>
            <td><?php echo $prodk->stok ?></td>
            

            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i> </div></td>
            <td><?php echo anchor('admin/data_produk/edit/'.$prodk->idproduk,
            '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> </div>')?></td>
            <td><?php echo anchor('admin/data_produk/hapus/'.$prodk->idproduk,
            '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
 </div>
 <div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_produk/tambah_aksi'?> " method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nama Produk </label>
        <input type="text" name="namaproduk" class="form-control"?>
    </div>
    <div class="form-group">
        <label> Deskripsi </label>
        <input type="text" name="deskripsi" class="form-control"?>
    </div>
        <label> Kategori </label>
        <select name="namakategori" class="form-control">
        <option value="">- Pilih -</option>
        
        <?php foreach($kategori as $ktgr ) { ?>
            <option value="<?= $ktgr->namakategori?>"><?= $ktgr->namakategori?></option>
            <?php } ?>
        </select>
    <div class="form-group">
        <label> Warna </label>
        <input type="text" name="warna" class="form-control"?>
    </div>
    <div class="form-group">
        <label> Ukuran </label>
        <input type="text" name="ukuran" class="form-control"?>
    </div>
    <div class="form-group">
        <label> Harga Before </label>
        <input type="text" name="hargabefore" class="form-control"?>
    </div>
    <div class="form-group">
        <label> Harga After </label>
        <input type="text" name="hargaafter" class="form-control"?>
    </div>
    <div class="form-group">
        <label> Stok </label>
        <input type="text" name="stok" class="form-control"?>
        </div>
    <div class="form-group">
        <label> Gambar </label>
        <input type="file" name="gambar" class="form-control"?>
      </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>