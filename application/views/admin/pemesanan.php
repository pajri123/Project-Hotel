<div class="page-header">
    <h3>Data Pemesanan Kamar</h3>
</div>

<a href="<?php echo base_url() . 'admin/pemesanan_add' ?>" class="btn btn-primary btn-sm">
    <span class="glyphicon glyphicon-plus"></span>Pemesanan Baru</a>
<br /><br />
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="table-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Kamar</th>
                <th>Tgl. Checkin</th>
                <th>Tgl. Checkout</th>
                <th>Harga Perhari</th>
                <th>Hari</th>
                <th>Total Harga</th>
                <th>Pembayaran</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pemesanan as $p) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($p->pemesanan_tgl)); ?></td>
                    <td><?php echo $p->customer_nama ?></td>
                    <td><?php echo $p->kamar_tipe ?></td>
                    <td><?php echo date('d/m/Y', strtotime($p->pemesanan_checkin)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($p->pemesanan_checkout)); ?></td>
                    <td><?php echo "Rp. " . number_format($p->pemesanan_harga) . " ,-"; ?></td>
                    <td><?php echo $p->hari . " Hari" ?></td>
                    <td><?php echo "Rp. " . number_format($p->pemesanan_totalharga) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($p->pembayaran) . " ,-"; ?></td>
                    <td>
                        <?php
                        if ($p->pemesanan_status == "1") {
                            echo "selesai";
                        } else {
                            echo "-";
                        } ?>
                    </td>
                    <td>
                        <?php
                        if ($p->pemesanan_status == "1") {
                            echo "-";
                        } else {
                        ?>
                            <a class="btn btn-sm btn-success" href="<?php echo base_url() . 'admin/pemesanan_selesai/' . $p->pemesanan_id; ?>">
                                <span class="glyphicon glyphicon-ok"></span>Pemesanan Selesai</a>
                            <br />
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url() . 'admin/pemesanan_hapus/' . $p->pemesanan_id; ?>" onclick="return confirm ('apakah data ini yakin di hapus')">
                                <span class="glyphicon glyphicon-remove"></span>Batalkan Pemesanan</a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>