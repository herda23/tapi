<script type="text/javascript">
	document.title="Edit Akun";
	document.getElementById('setting_akun').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Setting Akun</h3>
				<span class="label">* silahkan melakukan perubahan yang diperlukan.</span>
				<li class="admin-info">
						<img src="assets/img/<?php echo $_SESSION['gambar']; ?>">
						<span><?php echo $_SESSION['nama']; ?></span>
					</li>
				<form class="form-input" method="post" action="handler.php?action=edit_gambar">
					<?php $f=$root->edit_admin($_GET['id_kasir']) ?>
					<input type="hidden" name="id" value="<?= $f['id'] ?>">
					<input type="hidden" name="nama" placeholder="Nama" required="required" value="<?= $f['nama'] ?>">
					<input type="hidden" name="email" placeholder="Email" required="required" value="<?= $f['email'] ?>">
					<input type="hidden" name="nama_kasir" placeholder="Username" required="required" value="<?= $f['username'] ?>">
					<input type="hidden" name="password">
					<label>Ganti Gambar Profil     : </label>
					<input type="file" name="gambar" value="<?= $f['gambar'] ?>">
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="users.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
				<form class="form-input" method="post" action="handler.php?action=edit_admin">
					<?php $f=$root->edit_admin($_GET['id_kasir']) ?>
					<input type="hidden" name="id" value="<?= $f['id'] ?>">
					<label>Nama     : </label>
					<input type="text" name="nama" placeholder="Nama" required="required" value="<?= $f['nama'] ?>">
					<label>Email    : </label>
					<input type="text" name="email" placeholder="Email" required="required" value="<?= $f['email'] ?>">
					<label>Username    : </label>
					<input type="text" name="nama_kasir" placeholder="Username" required="required" value="<?= $f['username'] ?>">
					<label>Password Baru :</label>
					<input type="text" name="password">
					<input type="hidden" name="gambar" value="<?= $f['gambar'] ?>">
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a onclick="return confirm('yakin ingin reset akun pegawai?')" href="handler.php?action=reset_pegawai" class="btnblue" style="background: #f33155"><i class="fa fa-rotate-left"></i> Reset Akun</a>
					<a href="users.php" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
