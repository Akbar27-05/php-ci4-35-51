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
    <h3> <?= $judul?> </h3>
</div>

<div class="col-7">
    <form action="<?= base_url('/admin/user/ubah') ?>" method="post">
        <div class="mb-3">
            <input class="form-control" type="hidden" value="<?= $user['iduser']?>" name="iduser" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control" type="email" value="<?= $user['email']?>" name="email" required>
        </div>

        <div class="form-group">
        <label class="form-label">Level</label>
            <select class="form-select" name="level" id="idkategori">
                <?php foreach ($level as $key) { ?>
                    <option <?php if ($user['level']==$key) {
                        echo "selected";
                    }?> value="<?= $key ?>"><?= $key ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group mt-3">
            <input type="submit" value="simpan" name="simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>