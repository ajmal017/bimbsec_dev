<article class="p-4 border border-dark">
	<h3>Search result for: <?php echo $_POST['s']; ?></h3>
	<?php
		// Search the keyword in all single-* file in the folder, put it in a PHP array called $results
		$results = array(); // Init

		$dir = getcwd(); // Get the current folder

		if (is_dir($dir)){ 
		  if ($dh = opendir($dir)){                        // Open the directory
		    while (($file = readdir($dh)) !== false){      // Go through each filename in the directory
		      if (substr($file, 0, 7) == 'single-') {      // Check if the file starts with "single-", if YES process, if not just ignore
		      	// Open each file and check if have the search keyword, if yes tagged as "relevant" and extract the keyword phrases.
		      	$opened_file = fopen($file, "r") or die("Unable to open file!");
				$content =  fread($opened_file,filesize($file));
				$content_lower = strtolower($content);
				
				// Search all occurance and mark the order
				$haystack = $content_lower;
				$needle   = strtolower($_POST['s']);
				$i = 0;
				$find = array();
				while ( $pos =  strpos($haystack, $needle) ) {
					$the_sentence = rephrase_search($haystack, $needle, 10, $pos);

					
					// Push to $results
					array_push($results, $the_sentence);
				}

				fclose($opened_file);
		      }
		    }
		    closedir($dh);
		  }
		}

		// View the results
		foreach ($results as $desc) {
			var_dump($desc);
			echo "<br>";
		}
	?>
</article>
