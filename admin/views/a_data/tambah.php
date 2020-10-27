<h4>Tambah Data</h4>
<br>
<form action="index.php?mod=a_data&page=save" method="POST">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">ID</label>
            <input type="number" name="id_admin" required value="<?=(isset($_POST['id_admin']))?$_POST['id_admin']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['id_admin']))?$err['id_admin']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" required value="<?=(isset($_POST['email']))?$_POST['email']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" required value="<?=(isset($_POST['password']))?$_POST['password']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" name="status" required value="<?=(isset($_POST['status']))?$_POST['status']:'';?>" class="form-control">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>