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
    <h3> INSERT DATA </h3>
</div>

<div class="col-7">
    <form action="<?= base_url('/admin/user/insert') ?>" method="post">
        <div class="mb-3">
            <label for="" class="form-label">User:</label>
            <input class="form-control" type="text" name="user" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input class="form-control" type="email" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input class="form-control" type="password" name="password" required>
        </div>

        <div class="form-group">
        <label class="form-label">Level</label>
            <select class="form-select" name="level" id="idkategori">
                <?php foreach ($level as $key) { ?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group mt-3">
            <input type="submit" value="simpan" name="simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>