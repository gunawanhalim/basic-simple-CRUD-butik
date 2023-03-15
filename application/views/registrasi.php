<body class="bg-gradient-warning">

    <div class="container">

        <div class="card o-hidden border-0 col-lg-6 shadow-lg my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Membuat Akun </h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index')?>" class="user">
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Nama Anda" name="nama">
                                        <?php echo form_error('nama','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username anda" name="username">
                                        <?php echo form_error('username','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address anda" name="email">
                                        <?php echo form_error('email','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Masukkan Password" name="password_1">
                                            <?php echo form_error('password_1','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                    
                                </div>
                                    <div class="col-sm-6 mb-1">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
                                            <?php echo form_error('password_2','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="No Telp" name="notelp">
                                        <?php echo form_error('notelp','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Alamat" name="alamat">
                                        <?php echo form_error('alamat','<div class="text-danger small ml-2">
                                                ','</div>');?>
                                </div>
                                   
                                <button type="submit" class="btn btn-success btn-block btn-user">Daftar Akun</button>
                            </form>
                            <hr>
                           <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login/') ?>">Sudah punya akun ? Login !</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>