<div class="form-group">
    <select class="form-select" onchange="this.form.submit()" name="idkategori" id="idkategori">
        <option value="1">Cari...</option>
        <?php foreach ($kategori as $key => $value) { ?>
            <option value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
        <?php } ?>
    </select>
</div>