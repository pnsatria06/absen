<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-lg-6">
            <table class="table" id="absen">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($report as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <th><?= $data['nama']; ?></th>
                            <td><?= $data['tanggal']; ?></td>
                            <td><?= $data['waktu']; ?></td>
                            <td><?= $data['ket']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>