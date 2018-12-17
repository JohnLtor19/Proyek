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
			<h1>Membuat Pagination</h1>
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Pekerjaan</th>		
					</tr>
				</thead>
					<?php 
					$no = $this->uri->segment('3') + 1;
					foreach($user as $u){ 
					?>
				<tbody>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $u->nama ?></td>
						<td><?php echo $u->alamat ?></td>
						<td><?php echo $u->pekerjaan ?></td>
					</tr>
				</tbody>
			<?php } ?>
			</table>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
			<br>
			<?php echo "<div class='col-md-12' style='background: salmon; color: white; padding: 10px'>";
			echo "<center>";
			echo $this->pagination->create_links();
			echo "</center>";
			echo "</div>";
			?>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/footer_last.php";
?>