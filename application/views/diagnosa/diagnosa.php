<div class="container">
    <h4>Pilih Gejala Penyakit Pada Tanaman Cabai : </h4>
    <form action="<?= base_url('diagnosa/pembobotan') ?>" method="post">
        <?php foreach ($gejala as $g) : ?>
            <input type="checkbox" name="gejala[]" id="gejala" value="<?= $g['gejala']; ?>"> <?= $g['gejala']; ?><br>
        <?php endforeach; ?>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>