<?php
	$arrayName = array('sac','shariah-advisory-contact');
	$s 		= serialize($arrayName);
	"<br>";
	$v = unserialize($s) ;
?>
<div class="row text-white">
	<?php
		// Get current folder
		$dir = getcwd();

		// Open a directory, and read its contents
		if (is_dir($dir)){
		  if ($dh = opendir($dir)){
		    while (($file = readdir($dh)) !== false){
		      if (substr($file, 0, 7) == 'widget-') {
		      	?>

		      		<div class="col-md-6 mb-4">
		      			<h6 class="text-dark"><?php echo (substr($file, 7)); ?></h6>
		      			<?php include( $file ); ?>
		      		</div>

		      	<?php
		      }
		    }
		    closedir($dh);
		  }
		}else{
			echo "Not a directory";
		}
	?>	
</div>

