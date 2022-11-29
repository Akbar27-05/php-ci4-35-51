<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="col">
    <?php
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger p-2" role="alert">';
                echo '<div class="text-center">'.session()->getFlashdata('info').'</div>';
            echo '</div>';
        }
    ?>
</div>

<div class="col">
    <h3> UPDATE DATA </h3>
</div>

<div class="col-7">
    <form action="<?= base_url('/admin/kategori/update') ?>" method="post">
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input class="form-control" type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input class="form-control" type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required>
        </div>

        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>">

        <div class="mb-3">
            <input type="submit" value="simpan" name="simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>