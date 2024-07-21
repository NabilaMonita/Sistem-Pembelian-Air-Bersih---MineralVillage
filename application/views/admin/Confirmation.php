<div class="card">
    <h1 class="mt-4">Request Pembelian Air</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Request Pembelian Air</li>
    </ol>


    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">
                                <center>No</center>
                            </th>
                            <th width="15%">
                                <center>Nama</center>
                            </th>
                            <th width="15%">
                                <center>No Telp</center>
                            </th>
                            <th width="15%">
                                <center>Alamat Lengkap</center>
                            </th>>
                            <th width="10%">
                                <center>Jumlah Pemesanan</center>
                            </th>
                            <th width="10%">
                                <center>Total Pembayaran</center>
                            </th>
                            <th width="10%">
                                <center>Aksi</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($aquahub as $us) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $us['namalengkap']; ?></td>
                                <td><?= $us['no_telp']; ?></td>
                                <td><?= $us['alamat_lengkap']; ?></td>
                                <td><?= $us['jumlah_pemesanan']; ?></td>
                                <td><?= $us['total_pembayaran']; ?></td>
                                <td>
                                    <a href="<?= base_url('request/setuju/') . $us['id_aquahub'] ?>" class="btn btn-primary">Cetak Tagihan</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->