<form class="" action="<?php echo site_url ('Admin/save') ?>" method="post">
<label>Kode Admin</label><br>
<input type="text" name="kd_admin" value=""><p></p>

<label>Nama Admin</label><br>
<input type="text" name="nama_admin" value=""><p></p>

<label>Email</label><br>
<input type="text" name="email_admin" value=""><p></p>

<label>No HP</label><br>
<input type="text" name="hp_admin" value=""><p></p>

<label>Password</label><br>
<input type="text" name="pass_admin" value=""><p></p>

<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('Admin') ?>"><button type="button"
name="button">Batal</button></a>
</form>
