<div class="page-header">
    <h3>Edit Kamar</h3>
</div>
<?php foreach ($kamar as $k) { ?>
    <form action="<?php echo base_url() . 'admin/kamar_update' ?>" method="post">
        <div class="form-group">
            <label for="kamar_nomor">Nomor Kamar</label>
            <input type="hidden" name="kamar_id" value="<?php echo $k->kamar_id; ?>">
            <input type="text" name="kamar_nomor" class="form-control" id="" value="<?php echo $k->kamar_nomor; ?>">
            <?php echo form_error('kamar_nomor'); ?>
        </div>
        <div class="form-group">
            <label for="kamar_tipe">Tipe Kamar</label>
            <input type="text" name="kamar_tipe" class="form-control" id="" autocomplete="off" value="<?php echo $k->kamar_tipe; ?>">
        </div>
        <div class="form-group">
            <label for="kamar_fasilitas">Fasilitas Kamar</label>
            <input type="text" name="kamar_fasilitas" class="form-control" id="" autocomplete="off" value="<?php echo $k->kamar_fasilitas; ?>">
        </div>
        <div class="form-group">
            <label for="kamar_status">Status Kamar</label>
            <select name="kamar_status" id="status" class="form-control">
                <option <?php if ($k->kamar_status == "tersedia") {
                            echo "selected='selected'";
                        }
                        echo $k->kamar_fasilitas; ?> value="Tersedia">Tersedia</option>
                <option <?php if ($k->kamar_status == "tidaktersedia") {
                            echo "selected='selected'";
                        }
                        echo $k->kamar_fasilitas; ?> value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
            <?php echo form_error('status');  ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
    </form>
<?php } ?>