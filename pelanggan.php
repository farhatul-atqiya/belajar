<?php
$model = new Pelanggan();
$data_pelanggan = $model->tampilPelanggan();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No telepon</th>
                            <th>Jumlah beli</th>
                            <th>Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pelanggan as $row){
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['nama']?></td>
                            <td><?= $row ['jenis_kelamin']?></td>
                            <td><?= $row ['alamat']?></td>
                            <td><?= $row ['no_telepon']?></td>
                            <td><?= $row ['jumlah_beli']?></td>
                            <td><?= $row ['nama_produk']?></td>
                        </tr>
                        <?php
                        $no++;
                    }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>