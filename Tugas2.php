<form action="process.php" method="get">
	<fieldset>
		<legend>Tugas 2</legend>
		<p>
		<label>Nama:</label>
		<input type="text" name="nama" placeholder="Nama Kamu" />
		</p>
		<p>
		<label>Jenis Kelamin:</label>
		<label><input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki</label>
		<label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label>
		</p>
		<p>
		<label>Agama:</label>
		<select name="agama">
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Buddha">Buddha</option>
			<option value="Konghucu">Konghucu</option>
		</select>
		</p>
		<p>
		<label>Tempat Lahir:</label>
		<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" />
		</p>
		<p>
		<label>Tanggal Lahir:</label>
		<input type="date" name="tanggal_lahir" />
		</p>
		<p>
		<label>Hobi:</label>
		<input type="text" name="hobi" placeholder="Hobi Kamu" />
		</p>
		<p>
		<input type="submit" name="submit" value="Kirim" />
		</p>
	</fieldset>
	</form>

	<script>
	const form = document.querySelector('form');
	form.addEventListener('submit', (e) => {
		e.preventDefault();
		alert('Terima kasih telah mengisi!');
		form.submit();
	});
	</script>