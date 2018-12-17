<?php
include "part/html_first.php";
include "part/header.php";
?>

<!--BODY-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style="background: azure; border-radius: 3px; margin-bottom: 10px; margin-top: 10px;">
			<div class="row">
				<div class="col" style="background: #F4A460; border-radius: 3px">
					<h1 align="center">REGISTER</h1>
				</div>
			</div>
			<form action="" method="post">
				<table class="table">
					<tr>
						<th>Nama Lengkap</th>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<th>Username</th>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type="submit" value="Daftar" name="" class="btn tombol"></center></td>
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