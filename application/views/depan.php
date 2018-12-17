<?php
include "part/html_first.php";
include "part/header.php";
?>

<!--BODY-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
				<div id="demo" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-target="a3.jpg" data-slide-to="0" class="active"></li>
			    <li data-target="squad.jpg" data-slide-to="1"></li>
			    <li data-target="delphi.jpg" data-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="<?php echo base_url(); ?>images/a3.jpg" alt="Los Angeles" width="100%" height="500">
			    </div>
			    <div class="carousel-item">
			      <img src="<?php echo base_url(); ?>images/squad.jpg" alt="Chicago" width="100%" height="500">
			    </div>
			    <div class="carousel-item">
			      <img src="<?php echo base_url(); ?>images/delphi.jpg" alt="New York" width="100%" height="500">
			    </div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>

		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/footer_last.php";
?>