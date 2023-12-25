<div class="page-header">
    <h3>Data Kamar</h3>
</div>
<a href="<?php echo base_url() . 'admin/kamar_add'; ?>" class="btn btn-primary btn-sm">
    <span class="glyphicon glyphicon-plus"></span>Kamar Hotel Kencana</a>
<br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="table-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Kamar</th>
                <th>Tipe Kamar</th>
                <th>Fasilitas Kamar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kamar as $k) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $k->kamar_nomor ?></td>
                    <td><?php echo $k->kamar_tipe ?></td>
                    <td><?php echo $k->kamar_fasilitas ?></td>
                    <td><?php echo $k->kamar_status ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/kamar_edit/' . $k->kamar_id; ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url() . 'admin/kamar_hapus/' . $k->kamar_id; ?>" onclick="return confirm ('apakah data ini yakin di hapus')"><span class="glyphicon glyphicon-plus"></span>Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>