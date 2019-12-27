<div class="container">
    <h4>Hasil Diagnosa :</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nama Gejala</th>
                <th>Nilai CF</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bobot_gejala as $gejala => $bobot) : ?>
                <tr>
                    <td><?= $gejala ?></td>
                    <td><?= $bobot ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</div>