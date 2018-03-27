<section class="">
	<div class="container">

		<!-- Title box -->
		<div style="background: <?php echo $setting['theme-color'] ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="p-3">
						<div class="row mb-1">
							<div class="col-md-6">
								<small class="text-white"><a href="index.php" style="color: darkblue">Home</a> <i class="fas fa-angle-double-right"></i> <?php echo get_page_info($conn,$_GET['p'],'title','404'); ?></small>
							</div>
							<div class="col-md-6 d-flex justify-content-end">
								<div class="fb-like" data-href="<?php get_page_url() ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							</div>
						</div>
						<h3 class="text-white"><?php echo get_page_info($conn,$_GET['p'],'title','404'); ?></h3>
						<p class="small text-white"><?php echo get_page_info($conn,$_GET['p'],'description',''); ?></p>
					</div>
				</div>
				<div class="col-md-6">
					<img src="image/<?php echo get_page_info($conn,$_GET['p'],'featured_img','corporate.jpg') ?>" style="width: 100%">
				</div>
			</div>
		</div>
		<!-- End of Title box -->

		<?php if ( get_page_info($conn,$_GET['p'],'widgets','') != '' ) {	 ?>
			<div class="row">
				<div id="content-area" class="col-md-8 mt-4 text-justify">
					<?php
						$content = $_GET['p'];
						include_once 'single-'.$content.'.php';
					?>	
				</div>
				<div id="sidebar" class="col-md-4 mt-4 text-white">
					
					<?php 
						$sql = 'SELECT * FROM pages WHERE alias = "'.$_GET['p'].'"';
						$run = $conn->query($sql);
						if ($run->num_rows > 0) {
							$row = $run->fetch_assoc();
							$widgets = unserialize( $row['widgets'] );
							foreach ($widgets as $widget) { ?>
								<div class="mb-4">
									<?php include "widget-$widget.php";	?>	
								</div>			
							<?php }
						}
					?>
					
				</div>
			</div>
		<?php }else{ ?>
			<div id="content-area" class="mt-4 text-justify">
				<?php
					$content = $_GET['p'];
					include_once 'single-'.$content.'.php';
				?>	
			</div>
		<?php } ?>

	</div>
</section>

