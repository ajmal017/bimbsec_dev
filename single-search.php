<article class="p-4 border border-dark">
	<h3>Search result for: <?php echo $_POST['s']; ?></h3>
	<?php

		if(isset($_POST['s'])){
			// Search the keyword in all single-* file in the folder, put it in a PHP array called $results

			$dir = getcwd(); // Get the current folder

			if (is_dir($dir)){ 
			  if ($dh = opendir($dir)){                        // Open the directory
			    while (($file = readdir($dh)) !== false){      // Go through each filename in the directory
			      if (substr($file, 0, 7) == 'single-') {      // Check if the file starts with "single-", if YES process, if not just ignore
			      	// Open each file and check if have the search keyword, if yes tagged as "relevant" and extract the keyword phrases.
			      	$opened_file = fopen($file, "r") or die("Unable to open file!");
					$content =  fread($opened_file,filesize($file));
					$content_lower = $content;
					
					// Search all occurance
					$area = strip_tags($content_lower);
					$keyword   = $_POST['s'];
					$characters = ',:\/-';
					
					
					preg_match_all('/(\.\s)*[(\w+\s)'.$characters.']*(\w*('.$keyword.')\w*)[(\s*\w+)'.$characters.']*(\.)/i',$area,$results);
					


					$file_strip = substr($file, 7);
					$file_strip = substr($file_strip,0, -4);
					$file_strip = get_page_info($conn,$file_strip,'title','404');
					if($results[0][0] != NULL){
						echo '<h3><a href="'.substr(substr($file, 7),0,-4).'">'.$file_strip.'</a></h3>';
						echo '<p class="text-sm">https://www.bimbsec.com.my/'.$file.'</p>';
						echo "<ol>";
						foreach ($results[0] as $find){
							if ( substr($find, 0, 2) == '. ' ) {
								$find = substr($find, 3);
							}
							$keyword_c = $keyword;
							$find = str_ireplace($keyword, '<b class="text-danger">'.$keyword_c.'</b>', $find);
							echo '<li>'.$find.'</li> ';
						}
						echo "</ol><br>";	
					}
					
									  
					fclose($opened_file);
					
			      }
			    }
			    closedir($dh);
			  }
			}

		}else{
			echo "<h6>Please insert search keyword.</h6>";
		}
		
	?>
</article>
