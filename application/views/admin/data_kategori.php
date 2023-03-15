<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4 " data-toggle="modal" data-target="#tambah_kategori">
        <i class="fas fa-plus fa-sm"></i> Tambah Kategori</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Tanggal Dibuat</th>
            
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        $idkategori=1;
        foreach($kategori as $ktgr): ?>
        <tr>
            <td><?php echo $idkategori++ ?></td>
            <td><?php echo $ktgr->namakategori ?></td>
            <td><?php echo $ktgr->create_at ?></td>
            
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i> </div></td>
            <td><?php echo anchor('admin/data_kategori/edit/'.$ktgr->idkategori,
            '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> </div>')?></td>
            <td><?php echo anchor('admin/data_kategori/hapus/'.$ktgr->idkategori,
            '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
 </div>
 <div class="modal fade" id="tambah_kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_kategori/tambah_aksi'?> " method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nama Kategori </label>
        <input type="text" name="namakategori" class="form-control"?>
        <label> Tanggal dibuat </label>
        <input type="hidden" name="create_at" class="form-control"?>
        

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