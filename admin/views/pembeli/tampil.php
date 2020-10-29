<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h4>Daftar Pembeli</h4>
        </div>
        <div class="pull-right">
            <a href="index.php?mod=pembeli&page=add">
                <button class="btn btn-primary">add</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    
                    <td>Nama</td>
                    <td>Email</td>
                    <td>No. Telp</td>
                    <td>Alamat</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php if($pembeli!=NULL){
                $no=1;
                foreach($pembeli as $row){?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nama_user']?></td>
                    <td><?=$row['email']?></td>
                    
                    <td><?=$row['telp_user']?></td>
                    <td><?=$row['alamat']?></td>
                    <td>
                        <a href="index.php?mod=pembeli&page=edit&id=<?=md5($row['telp_user'])?>"><i
                                class="fa fa-pencil"></i> </a>
                        <a href="index.php?mod=pembeli&page=delete&id=<?=($row['telp_user'])?>"><i
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