<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger p-2" role="alert">';
        $eror = session()->getFlashdata('info');
        foreach ($eor as $key => $value) {
            echo $key."=>".$value;
            echo "<br>";
        }

        echo '</div>';
    }
    ?>
</div>

<div class="col">
    <h3> UPDATE DATA </h3>
</div>

<div class="col-7">
    <form action="<?= base_url('/admin/menu/update') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label class="form-label">Kategori</label>
            <select class="form-select" name="idkategori" id="idkategori">
                <?php foreach ($kategori as $key => $value) { ?>
                    <option <?php if ($value['idkategori'] == $menu['idkategori']) echo "selected"?> value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Menu</label>
            <input class="form-control" type="text" name="menu" value="<?= $menu['menu']?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input class="form-control" type="number" name="harga" value="<?= $menu['harga']?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input class="form-control" type="file" name="gambar">
        </div>
        <input class="form-control" type="hidden" name="gambar" value="<?= $menu['gambar']?>"  required>
        
        <input class="form-control" type="hidden" name="idmenu" value="<?= $menu['idmenu']?>"  required>
        <div class="form-label">
            <input class="btn btn-primary" type="submit" value="simpan" name="simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>