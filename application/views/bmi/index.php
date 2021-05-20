<div class="col-md-12">
    <h3 class="mt-2">Daftar BMI Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $nomor=1;
                foreach($list_bmipasien as $data): ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $data->tanggal ?></td>
                    <td><?= $data->pasien->kode ?></td>
                    <td><?= $data->pasien->nama ?></td>
                    <td><?= $data->pasien->jenis_kelamin() ?></td>
                    <td><?= $data->bmi->berat ?></td>
                    <td><?= $data->bmi->tinggi ?></td>
                    <td><?= $data->bmi->nilaiBMI() ?></td>
                    <td><?= $data->bmi->statusBMI() ?></td>
                    
                </tr>   
            <?php
                $nomor++;
                endforeach;
            ?>
        </tbody>
    </table>
</div>