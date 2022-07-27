

<div class="col-lg-6">
                <h2>Berdasarkan tanggal</h2>
                <form action="<?= base_url('rekap/report') ?>" method="post">
                    <div class="form-group">
                        <label for="tanggalAwal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggalAwal" name="tanggalAwal" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark mt-2" type="submit">Lihat</button>
                    </div>
                </form>
            </div>