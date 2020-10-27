<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h4>Data Admin</h4>
        </div>
        <div class="pull-right">
            <a href="index.php?mod=a_data&page=add">
                <button class="btn btn-primary">add</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    
                    <td>ID</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Status</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php if($a_data!=NULL){
                $no=1;
                foreach($a_data as $row){?>
                <tr>
                    <td><?=$row['id_admin']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=($row['password'])?></td>
                    <td><?=$row['status']?></td>
                    <td>
                        <a href="index.php?mod=a_data&page=edit&id=<?=md5($row['id_admin'])?>"><i
                                class="fa fa-pencil"></i> </a>
                        <a href="index.php?mod=a_data&page=delete&id=<?=($row['id_admin'])?>"><i
                                class="fa fa-trash"></i> </a>
                    </td>
                </tr>
                <?php $no++;
                }
            } 
            ?>
            </tbody>
        </table>
    </div>