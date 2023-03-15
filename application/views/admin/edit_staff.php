<div class="container-fluid">
    <h3><i class="fas fa-edit"> Edit data staff </i></h3>
    <?php 
    foreach ($login as $row) : ?>
     <form action="<?php echo base_url().'admin/data_staff/update'?> " method="post" enctype="multipart/form-data">
     <div class="form-group">
         <label >Nama Produk</label>
         <input type="hidden" name="userid" class="form-control" value="<?php echo $row->userid ?>">
         <input type="text" name="nama" class="form-control" value="<?php echo $row->namalengkap ?>">
         <label >Kategori</label>
         <input type="text" name="alamat" class="form-control" value="<?php echo $row->alamat ?>">
         <label>Jenis Kelamin</label> <br>
            <input id="laki-laki" name="gender" type="radio" class="" <?php if($row->gender=='Laki-Laki') echo "checked='checked'"; ?> value="Laki-Laki" <?php echo $this->form_validation->set_radio('gender', "Laki-Laki"); ?> />
            <label for="laki-laki" class="">Laki-Laki</label>
            <input id="perempuan" name="gender" type="radio" class="" <?php if($row->gender=='Perempuan') echo "checked='checked'"; ?> value="Perempuan" <?php echo $this->form_validation->set_radio('gender', "Perempuan"); ?> />
            <label for="perempuan" class=""> Perempuan</label>
            <input id="lainnya" name="gender" type="radio" class="" <?php if($row->gender=='Lainnya') echo "checked='checked'"; ?> value="Lainnya" <?php echo $this->form_validation->set_radio('gender', "Lainnya"); ?> />
            <label for="lainnya" class="">Lainnya</label><br>
        <label >No Handphone</label>
         <input type="text" name="notelp" class="form-control" value="<?php echo $row->notelp ?>">
         <!-- <label> Gambar </label>
        <input type="file" name="gambar" class="form-control"?> -->
        </div>
     <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
     </form>
    <?php endforeach ?>
</div> 