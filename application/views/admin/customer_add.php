<div class="page-header">
    <h3>Customer Hotel Kencana</h3>
</div>
<form action="<?php echo base_url() . 'admin/customer_add_act' ?>" method="post">
    <div class="form-group">
        <label for="ktp">Nomor KTP</label>
        <input type="text" name="ktp" class="form-control" id="">
        <?php echo form_error('ktp'); ?>
    </div>
    <div class="form-group">
        <label for="nama">Nama Customer</label>
        <input type="text" name="nama" class="form-control" id="" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <?php echo form_error('jk');  ?>
    </div>
    <div class="form-group">
        <label for="hp">No Handphone</label>
        <input type="text" name="hp" class="form-control" id="" autocomplete="off">
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>