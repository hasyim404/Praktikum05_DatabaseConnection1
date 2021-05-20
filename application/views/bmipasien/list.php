<div class="col-md-12">
    <h3 class="mt-2">Daftar BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th><th>Tanggal</th><th>Berat</th><th>Tinggi</th>
                <th>BMI</th><th>Status BMI</th>
                <th>Catatan</th><th>ID Pasien</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($bmipasien->result() as $bmipasien):?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$bmipasien->tanggal?></td>
                <td><?=$bmipasien->berat?></td>
                <td><?=$bmipasien->tinggi?></td>
                <td><?=$bmipasien->bmi?></td>
                <td><?=$bmipasien->status_bmi?></td>
                <td><?=$bmipasien->catatan?></td>
                <td><?=$bmipasien->pasien_id?></td>
                <td><a href="<?=base_url()?>index.php/bmi_pasien/view/<?=$bmipasien->id?>">View</a></td>
            </tr>
            <?php
            $nomor++;
            endforeach;?>
        </tbody>
    </table>
</div>
