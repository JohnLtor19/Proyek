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
			<h1>Login berhasil!</h1>
			<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
			<a style="margin-bottom: 5px" class="btn tombol" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
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