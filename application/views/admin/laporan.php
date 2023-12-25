<div class="page-header">
    <h3>laporan</h3>
</div>

<form action="<?php echo base_url() . 'admin/laporan' ?>" method="post">
    <div class="form-group">
        <label> Dari Tanggal</label>
        <input type="date" name="dari" class="form-control">
        <?php echo form_error('dari'); ?>
    </div>
    <div class="form-group">
        <label> Sampai Tanggal</label>
        <input type="date" name="sampai" class="form-control">
        <?php echo form_error('sampai'); ?>
    </div>
    <div class="form-group">
        <input type="submit" name="cari" value="CARI" class="btn btn-sm btn-primary">
    </div>
</form>