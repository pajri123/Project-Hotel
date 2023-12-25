<div class="page-header">
    <h3>Pemesanan Baru</h3>
</div>
<form action="<?php echo base_url() . 'admin/pemesanan_add_act' ?>" method="post">
    <div class="form-group">
        <label for="customer">Customer</label>
        <select name="customer" class="form-control">
            <option value="">-pilih customer-</option>
            <?php foreach ($customer as $c) { ?>
                <option value="<?php echo $c->customer_id; ?>"><?php echo $c->customer_nama; ?></option>
            <?php } ?>
        </select>
        <?php echo form_error('customer'); ?>
    </div>

    <div class="form-group">
        <label for="kamar">Kamar</label>
        <select name="kamar_tipe" class="form-control">
            <option value="">-pilih Kamar-</option>
            <?php foreach ($kamar as $k) { ?>
                <option value="<?php echo $k->kamar_id; ?>"><?php echo $k->kamar_tipe; ?></option>
            <?php } ?>
        </select>
        <?php echo form_error('kamar_tipe'); ?>
    </div>

    <div class="form-group">
        <label>Tanggal Checkin</label>
        <input type="date" name="tgl_checkin" class="form-control">
        <?php echo form_error('tgl_checkin'); ?>
    </div>

    <div class="form-group">
        <label>Tanggal Checkout</label>
        <input type="date" name="tgl_checkout" class="form-control">
        <?php echo form_error('tgl_checkout'); ?>
    </div>

    <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control">
        <?php echo form_error('harga'); ?>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>