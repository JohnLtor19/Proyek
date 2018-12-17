<?php
include "part/html_first.php";
include "part/header.php";
?>

<!--BODY-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style="background: azure; border-radius: 3px; margin-top: 10px; margin-bottom: 10px">
			<h1>Membuat Input dari Halaman WEB</h1>
			<form action="<?php echo base_url(); ?>index.php/crud/tambah_aksi" method="post">
				<table class="table table-striped">
					<tr>
						<th>Nama</th>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td><input type="text" name="alamat"></td>
					</tr>
					<tr>
						<th>Pekerjaan</th>
						<td><input type="text" name="pekerjaan"></td>
					</tr>
					<tr>
						<td colspan="2"><input style="float: right;" class="btn btn-primary" type="submit" value="Tambah"></td>
					</tr>
				</table>
			</form>				
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/footer_last.php";
?>