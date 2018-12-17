<?php
include "part/html_first.php";
include "part/header.php";
?>

<!--BODY-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style="margin-bottom: 10px; margin-top: 10px; background: azure; border-radius: 3px">
			<h1>Menampilkan Data dari Database dalam Bentuk Tabel</h1>

			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Pekerjaan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = $this->uri->segment('3') + 1;
					foreach($user as $u){ 
					?>
					<tr>
						<th><?php echo $no++ ?></th>
						<td><?php echo $u->nama ?></td>
						<td><?php echo $u->alamat ?></td>
						<td><?php echo $u->pekerjaan ?></td>
						<td>
						    <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
			                <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
						</td>
					</tr>
				</tbody>
				<?php } ?>				
			</table>
			<a style="float: right; margin-bottom: 5px" class="btn btn-primary" href="<?php base_url(); ?>crud/tambah">Tambah Data</a>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<?php 
			echo "<div class='pagination justify-content-center'><center>";
			 echo $this->pagination->create_links(); 
			 echo "</center></div>"; 
		?>
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/footer_last.php";
?>