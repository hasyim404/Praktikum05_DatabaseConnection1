<div class="col-md-12">
    <h3 class="mt-2">Data BMI Pasien #ID: <?=$bmipasien->id?></h3>
    <div>
        <table class="table table-striped">
            <tr>
                <td>Tanggal Periksa</td><td>:</td><td><?=$bmipasien->tanggal?></td>
            </tr><tr>
                <td>Berat</td><td>:</td><td><?=$bmipasien->berat?></td>
            </tr><tr>
                <td>Tinggi</td><td>:</td><td><?=$bmipasien->tinggi?></td>
            </tr><tr>
                <td>BMI</td><td>:</td>
                <td><?=$bmipasien->bmi?></td>
            </tr><tr>
                <td>Status BMI</td><td>:</td><td><?=$bmipasien->status_bmi?></td>
            </tr><tr>
                <td>Catatan</td><td>:</td><td><?=$bmipasien->catatan?></td>
            </tr><tr>
                <td>ID Pasien</td><td>:</td><td><?=$bmipasien->pasien_id?></td>
            </tr>
        </table>
    </div>
</div>
