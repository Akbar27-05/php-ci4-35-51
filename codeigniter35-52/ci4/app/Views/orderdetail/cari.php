<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<?php
if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>

<div class="row">
    <div class="col-5 mt-3">
        <h3> <?= $judul; ?></h3>
    </div>

    <div class="col">
        <form action="<?= base_url('/admin/orderdetail/cari') ?>" method="post">
            <div class="form-group float-start">
                <label>Awal:</label>
                <input class="form-control" type="date" name="awal" required>
            </div>

            <div class="form-group float-start ms-2">
                <label class="">Sampai:</label>
                <input class="form-control" type="date" name="sampai" required>
            </div>

            <div class="form-group float-start ms-2 mt-4">
                <input type="submit" value="Cari" name="cari">
            </div>
        </form>
    </div>
</div>

<div class="row mt-2">
    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>

            <?php $no ?>
            <?php foreach ($orderdetail as  $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['tglorder'] ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><?= $value['harga'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['jumlah'] * $value['harga'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>

<?= $this->endSection() ?>