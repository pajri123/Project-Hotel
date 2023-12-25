<div class="page-header">
    <h3>Pemesanan Selesai</h3>
</div>

<?php foreach ($pemesanan as $p) { ?>
    <form action="<?php echo base_url() . 'admin/pemesanan_selesai_act' ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $p->pemesanan_id ?>">

        <div class="form group">
            <label>Customer</label>
            <select class="form-control" name="customer" disabled>
                <option value="">-pilih customer-</option>
                <?php foreach ($customer as $c) { ?>
                    <option <?php if ($p->pemesanan_customer == $c->customer_id) {
                                echo "selected='selected'";
                            }
                            ?> value="<?php echo $c->customer_id; ?>"><?php echo $c->customer_nama; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form group">
            <label>Kamar</label>
            <select class="form-control" name="kamar_tipe" disabled>
                <option value="">-pilih kamar-</option>
                <?php foreach ($kamar as $k) { ?>
                    <option <?php if ($p->pemesanan_kamar == $k->kamar_id) {
                                echo "selected='selected'";
                            }
                            ?> value="<?php echo $k->kamar_id; ?>"><?php echo $k->kamar_tipe; ?></option>
                <?php } ?>
            </select>
        </div>


        <div class="form-group">
            <label>Tanggal Checkin</label>
            <input type="date" name="tgl_checkin" class="form-control" value="<?php echo $p->pemesanan_checkin ?>" disabled>
        </div>

        <div class="form-group">
            <label>Tanggal Checkout</label>
            <input type="date" name="tgl_checkout" class="form-control" value="<?php echo $p->pemesanan_checkout ?>" disabled>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $p->pemesanan_harga ?>" disabled>
        </div>

        <div class="form-group">
            <label>Hari</label>
            <input type="number" name="hari" class="form-control" value="<?php echo $p->hari ?>" disabled>
        </div>

        <div class="form-group">
            <label>Total Harga</label>
            <input type="number" name="totalharga" class="form-control" value="<?php echo $p->pemesanan_totalharga ?>" disabled>
        </div>

        <div class="form-group">
            <label>Pembayaran Customer</label>
            <input type="number" name="pembayaran" class="form-control">
            <?php echo form_error('pembayaran'); ?>
        </div>

        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
    </form>
<?php }
