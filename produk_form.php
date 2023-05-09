
<!-- Ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
<div class="container">
<form method="POST" action="produk_controller.php">
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
    <input id="nama" name="nama" type="text" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
    <input id="harga_beli" name="harga_beli" type="text" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
    <input id="stok" name="stok" type="text" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
    <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected> Pilih Jenis Produk  </option>
        <?php
        foreach ($data_jenis_produk as $jenis){
            
            ?>
        <option value="<?php echo $jenis['id']?>"><?php echo $jenis['nama']?></option>
        <?php
        }
        ?>
    </select>

    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" type="submit" class="btn btn-primary" value="simpan">Simpan</button>
    </div>
</div>
</form>
</div>

</section>
</div>
<!-- ini untuk tutup konten -->
<?php
include_once('footer.php');
?>
