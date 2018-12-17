<?php
include "part/html_first.php";
include "part/header.php";
?>

<!--BODY-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style="background: azure; border-radius: 3px; margin-bottom: 10px; margin-top: 10px">
			<div class="row" style="background: #F4A460; border-radius: 3px">
				<div class="col">
					<center><h1>Login</h1></center>
				</div>
			</div>
			<form action="<?php echo base_url(); ?>index.php/login/aksi_login" method="post">		
				<table class="table table-hover">
					<tr>
						<th>Username</th>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="password"></td>
					</tr>
				</table>
				<center><input class="btn tombol" type="submit" value="Login"></center>
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