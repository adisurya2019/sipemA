<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=pembeli&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama_user" required value="<?=(isset($_POST['nama_user']))?$_POST['nama_user']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama_user']))?$err['nama_user']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" required value="<?=(isset($_POST['email']))?$_POST['email']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" required value="<?=(isset($_POST['password']))?$_POST['password']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">No. Telp</label>
            <input type="number" name="telp_user" required value="<?=(isset($_POST['telp_user']))?$_POST['telp_user']:'';?>" class="form-control">
            
        </div>
        
        <div class="form_group">
        <label for="">Alamat</label>
            <input type="text" name="alamat" required value="<?=(isset($_POST['alamat']))?$_POST['alamat']:'';?>" class="form-control">
        </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>