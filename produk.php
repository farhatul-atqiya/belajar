<?php
$models = new Produk();
$data_produk = $models->tampilProduk();
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
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Jenis Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_produk as $row){
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['nama']?></td>
                            <td><?= $row ['harga_jual']?></td>
                            <td><?= $row ['stok']?></td>
                            <td><?= $row ['jenis_produk_id']?></td>
                            <td>
                                <form action="produk_controller.php" method="POST">
                                    <a href="index.php?hal=produk_detail&iddetail=<?php echo $row ['id'] ?> ">
                                        <button type="button" class="btn btn-info btn-sm" title="Detail Mahasiswa">
                                        <i class="fa-solid fa-eye fa-bounce"></i>
                                        </button>
                                    </a>

                                    <a href="index.php?hal=produk_edit&idedit=<?php echo $row ['id'] ?> ">
                                        <button type="button" class="btn btn-warning btn-sm" title="Edit Mahasiswa">
                                        <i class="fa-regular fa-pen-to-square fa-bounce" style="--fa-primary-color: #e1b694; --fa-secondary-color: #121212;"></i>
                                        </button>
                                    </a>

                                    <button type="sumbit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Apakah anda yakin ingin mengahpus data produk <?= $row['nama'] ?> ? ')"
                                    title="Hapus Produk">
                                    <i class="fa-solid fa-trash fa-bounce" style="color: white;"></i>
                                    </button>

                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                </form>
                            </td>
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