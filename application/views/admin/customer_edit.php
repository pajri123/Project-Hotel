<div class="page-header">
    <h3>Edit Customer</h3>
</div>
<?php foreach ($customer as $c) { ?>
    <form action="<?php echo base_url() . 'admin/customer_update' ?>" method="post">
        <div class="form-group">
            <label for="ktp">Nomor KTP</label>
            <input type="hidden" name="customer_id" value="<?php echo $c->customer_id; ?>">
            <input type="text" name="ktp" class="form-control" id="" value="<?php echo $c->customer_ktp; ?>">
            <?php echo form_error('ktp'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Customer</label>
            <input type="text" name="nama" class="form-control" id="" autocomplete="off" value="<?php echo $c->customer_nama; ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="" autocomplete="off" value="<?php echo $c->customer_alamat; ?>">
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamain</label>
            <select name="jk" id="" class="form-control">
                <option <?php if ($c->customer_jk == "Laki-laki") {
                            echo "selected='selected'";
                        }
                        echo $c->customer_ktp; ?> value="Laki-laki">Laki-laki</option>
                <option <?php if ($c->customer_jk == "perempuan") {
                            echo "selected='selected'";
                        }
                        echo $c->customer_ktp; ?> value="perempuan">Perempuan</option>
            </select>
            <?php echo form_error('jk');  ?>
        </div>
        <div class="form-group">
            <label for="hp">No Handphone</label>
            <input type="text" name="hp" class="form-control" id="" autocomplete="off" value="<?php echo $c->customer_hp; ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
    </form>
<?php } ?>