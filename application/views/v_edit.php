<?php
include "part/html_first.php";
include "part/header.php";
?>

<!--BODY-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style="background: azure; margin-top: 10px; margin-bottom: 10px; border-radius: 3px;">
			<h1>Mengedit Data melalui Halaman WEB</h1>
			<?php foreach($user as $u){ ?>
			<form action="<?php echo base_url(); ?>index.php/crud/update" method="post">
				<table class="table table-striped">
					<tr>
						<td>Nama</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $u->id ?>">
							<input type="text" name="nama" value="<?php echo $u->nama ?>">
						</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
					</tr>
					<tr>
						<td colspan="2"><input class="btn btn-primary" style="float: right;" type="submit" value="Simpan"></td>
					</tr>
				</table>
			</form>	
			<?php } ?>			
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