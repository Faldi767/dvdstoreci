<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('parts/header.php'); ?>
</head>
<body>
	<div id="all">
		<?php $this->load->view('parts/navbar.php');?>
		<hr/>
		<div id="content">
			<div class="container">
				<div class="row bar">
					<?php $this->load->view('parts/category.php'); ?>
					<div class="col-md-9">
								<?php
								$i=1;
								$numstart = $this->uri->segment(3) + 1;?>
								<div class="row products products-big">

									<?php
									foreach($tampil as $tmpl) {;?>
										<div class="col-lg-4 col-md-6">
										<div class="product">
										<div class="image"><a href="shop-detail.html"><img src="<?= base_url ()?>assets/product_images/<?php  echo $tmpl->product_img1;?>" alt="" class="img-fluid image1"></a></div>
										<div class="text">
											<h3 class="h5"><a href="#"><?php echo $tmpl->product_title; ?></a></h3>
											<p class="price"><?php echo $tmpl->product_price; ?></p>
										</div>

									</div>
									</div>
								<?php $i++;
								$numstart++; } ?>
							</div>
							<?php
	echo $pagination;
	?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php $this->load->view('parts/footer.php');?>
	<?php $this->load->view('parts/js.php'); ?>
	</html>
