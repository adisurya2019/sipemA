<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h4>Daftar Produk</h4>
        </div>
        <div class="pull-right">
            <a href="index.php?mod=produk&page=add">
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
                    <td>Jenis Produk</td>
                    <td>Harga</td>
                    <td>Kode Produk</td>
                    
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php if($produk!=NULL){
                $no=1;
                foreach($produk as $row){?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nama_produk']?></td>
                    <td><?=$row['jenis_produk']?></td>
                    <td>Rp. <?=number_format($row['harga'])?></td>
                    <td><?=$row['kode_produk']?></td>
                    
                    <td>
                        <a href="index.php?mod=produk&page=edit&id=<?=md5($row['id_produksi'])?>"><i
                                class="fa fa-pencil"></i> </a>
                        <a href="index.php?mod=produk&page=delete&id=<?=($row['id_produksi'])?>"><i
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