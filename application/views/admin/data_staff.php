<div class="container-fluid">
    <h4>Data Staff </h4>

<table class="table table-bordered table-hover table-striped">
<tr>
            <th>Id Staff</th>
            <th>Nama Staff</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Handphone</th>
            <th colspan="2">Aksi</th>
            </tr>

        <?php 
        foreach ($login as  $row ):
       
        ?>
        <tr>
            <td><?php echo $row->userid?></td>
            <td><?php echo $row->namalengkap?></td>
            <td><?php echo $row->alamat?></td>
            <td><?php echo $row->gender?></td>
            <td><?php echo $row->notelp?></td>
            <!-- <td><?php echo $row->lastlogin?></td> -->
            <td><?php echo anchor('admin/data_staff/edit/'.$row->userid,
            '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> </div>')?></td>
            <td><?php echo anchor('admin/data_staff/hapus/'.$row->userid,
            '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
            </td>
        </tr>
        
        <?php endforeach; ?>
       
    </table>
    <a href="<?php echo base_url('admin/dashboard_admin')?>"> <div class="btn btn-sm btn-dark">Kembali</div></a>
</div>