<?php
$xml = ("http://www2.e-solat.gov.my/xml/today/index.php?zon=SGR03");
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml); 
$x 	=	$xmlDoc->getElementsByTagName('channel')->item(0);
$zone_desc 	= $x->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
?>
<?php 
$x=$xmlDoc->getElementsByTagName('item');
?>


<strong>Solat Time for KL <?php echo $zone_desc;?></strong> | <?php for ($i=1; $i<=6; $i++) {
		echo $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
		echo ' - ';
		echo $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
		echo ' | ';
	}?>