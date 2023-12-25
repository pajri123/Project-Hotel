<div class="page-header">
    <h3>Laporan</h3>
</div>

<form action="<?php echo base_url() . 'admin/laporan' ?>" method="post">
    <div class="form-group">
        <label>Dari Tanggal</label>
        <input type="date" name="dari" value="<?php echo set_value('dari'); ?>" class="form-control">
        <?php echo form_error('dari'); ?>
    </div>

    <div class="form-group">
        <label>Sampai Tanggal</label>
        <input type="date" name="sampai" value="<?php echo set_value('sampai'); ?>" class="form-control">
        <?php echo form_error('sampai'); ?>
    </div>

    <div class="form-group">
        <input type="submit" name="cari" value="CARI" class="btn btn-sm btn-primary">
    </div>
</form>

<div class="btn-group">
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/laporan_print/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>">
        <span class="glyphicon glyphicon-print">Print</span></a>
</div>
<br />
<br />
<div class="table-responsive">
    <table border="1" class="table table-striped table-hover table-bordered" id="table-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Kamar</th>
                <th>Tanggal Checkin</th>
                <th>Tanggal Checkout</th>
                <th>Harga Perhari</th>
                <th>Hari</th>
                <th>Total Harga</th>
                <th>Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($laporan as $l) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->pemesanan_tgl)); ?></td>
                    <td><?php echo $l->customer_nama ?></td>
                    <td><?php echo $l->kamar_tipe ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->pemesanan_checkin)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->pemesanan_checkout)); ?></td>
                    <td><?php echo "Rp. " . number_format($l->pemesanan_harga) . " ,-"; ?></td>
                    <td><?php echo $l->hari . " Hari" ?></td>
                    <td><?php echo "Rp. " . number_format($l->pemesanan_totalharga) . " ,-"; ?></td>
                    <td><?php echo "Rp. " . number_format($l->pembayaran) . " ,-"; ?></td>
                    <td>
                        <?php
                        if ($l->pemesanan_status == "1") {
                            echo "selesai";
                        } else {
                            echo "-";
                        } ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>