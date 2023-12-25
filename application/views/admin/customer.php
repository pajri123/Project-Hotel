<div class="page-header">
    <h3>Data Customer</h3>
</div>
<a href="<?php echo base_url() . 'admin/customer_add'; ?>" class="btn btn-primary btn-sm">
    <span class="glyphicon glyphicon-plus"></span>Customer Hotel Kencana</a>
<br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="table-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>No KTP</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No Handphone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($customer as $c) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $c->customer_ktp ?></td>
                    <td><?php echo $c->customer_nama ?></td>
                    <td><?php echo $c->customer_alamat ?></td>
                    <td><?php echo $c->customer_jk ?></td>
                    <td><?php echo $c->customer_hp ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/customer_edit/' . $c->customer_id; ?>"><span class="glyphicon glyphicon-plus"></span>Edit</a>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url() . 'admin/customer_hapus/' . $c->customer_id; ?>" onclick="return confirm ('apakah data ini yakin di hapus')"><span class="glyphicon glyphicon-plus"></span>Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>