<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h4>Data Admin</h4>
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
                </tr>
                <?php $no++;
                }
            } 
            ?>
            </tbody>
        </table>
    </div>