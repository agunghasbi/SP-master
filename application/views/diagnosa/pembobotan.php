<div class="container">
    <h4>Penilaian Masing-Masing Gejala Penyakit Pada Tanaman Cabai : </h4>
    <form action="<?= base_url('diagnosa/hasil') ?>" method="post">
        <?php $jumlah = count($gejala); ?>
        <input type="hidden" name="jumlah" value="<?= $jumlah; ?>">
        <ol>
            <?php $i = 1; ?>
            <?php foreach ($gejala as $g) : ?>
                <li><?= $g ?></li>
                <input type="hidden" name="gejala[]" value="<?= $g; ?>">
                <input type="radio" name="bobot<?= $i; ?>" id="sedikit" value="0.2"> Sedikit <br>
                <input type="radio" name="bobot<?= $i; ?>" id="sedikit" value="0.4"> Cukup Banyak <br>
                <input type="radio" name="bobot<?= $i; ?>" id="sedikit" value="0.6"> Banyak <br>
                <input type="radio" name="bobot<?= $i; ?>" id="sedikit" value="0.8"> Sangat Banyak <br>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ol>
        <input type="submit" class="btn btn-primary" value="Hasil Diagnosa">
    </form>
</div>