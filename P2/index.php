<!DOCTYPE * html>
<body>
	<div class="col-sm-4">
		<form method="POST" action="">
			<tabel>1800330011</tabel>
			<input type="number" name="1800330011" class="form-control">
			<tabel>Sustri Rahayu</tabel>
			<input type="text" name="sustri rahayu" class="form-control">
			<button type="submit" name="save" class="btn btn-primary btn-blok">
				simpan
			</button>
		</form>
	</div>
	<div class="col-sm-4">
		<h4 class="title">Table Data Mahasiswa</h4>
		<?php
		if (isset($_POST['SAVE'])) {
		$_nim = $_POST['1800330011']
		$_nama = $_POST'sustri rahayu']
		?>
		<table class="table table-border table-border table">
			<tnody>
				<tr>
					<td>1800330011</td>
					<td>sustri rahayu</td>
				</tr>
			</theAd>
			<tbody>
				<tr>
					<td><?php echo $nim ?></td>/
					<td><?php echo $nama ?></td>

				<tr>
				</tbody>
			</table>
			<?php

		}
		?>
	</div>
</body>
</html>





					











