<div class="page-header">
    <h3>Kamar Hotel Kencana</h3>
</div>
<form action="<?php echo base_url() . 'admin/kamar_add_act' ?>" method="post">
    <div class="form-group">
        <label for="kamar_nomor">Nomor Kamar</label>
        <input type="text" name="kamar_nomor" class="form-control" id="">
        <?php echo form_error('kamar_nomor'); ?>
    </div>
    <div class="form-group">
        <label for="kamar_tipe">Tipe Kamar</label>
        <input type="text" name="kamar_tipe" class="form-control" id="" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="kamar_fasilitas">Fasiltas Kamar</label>
        <input type="text" name="kamar_fasilitas" class="form-control" id="" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="kamar_status">Status Mobil</label>
        <select name="kamar_status" id="" class="form-control">
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
        </select>
        <?php echo form_error('kamar_status');  ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>