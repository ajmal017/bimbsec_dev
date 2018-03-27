<?php

	// Get all the settings
	$sql = 'SELECT parameter,value FROM settings';
	$run = $conn->query($sql);
	$setting = array();
	while ($row = $run->fetch_assoc() ) {
		$setting[$row['parameter']] = $row['value'];      // Put all in array 'setting'
	}
	
	// Function to get the attributes of pages based on its alias
	function get_page_info($conn,$alias,$column,$def){
		
		$sql = 'SELECT '.$column.' FROM pages WHERE alias = "'.$alias.'"';
		$run = $conn->query($sql);
		$row = $run->fetch_assoc();
		if ( $row[$column] != '' ) {
			return $row[$column];
		}else{
			return $def;
		}
	}



	// Function to choose parent menu to be highlighted
	function is_parent($conn,$alias,$this_id){
		$parent_id = get_page_info($conn,$alias,'parent_id',0);
		if ( $parent_id == $this_id ) {
			echo ' bg-theme text-white';
		}
	}


	// Function to get the url of the page (useful for fb like and share button)
	function get_page_url(){
		echo $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}


	// Detect mobile
	function isMobile() {
	    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}


	// Get 10 words before and after the string
	function rephrase_search($str, $query, $numOfWordToAdd) {


	    list($before, $after) = explode($query, $str);

	    $space_before = '';
	    $space_after = '';

	    if ( substr($before,-1) == ' ' ) {
	    	$space_before = ' ';
	    }

	    if ( substr($after,0,1) == ' ' ) {
	    	$space_after = ' ';
	    }


	    $beforeArray = array_reverse(explode(" ", $before));
	    $afterArray  = explode(" ", $after);

	    $countBeforeArray = count($beforeArray);
	    $countAfterArray  = count($afterArray);

	    $beforeString = "";
	    if($countBeforeArray < $numOfWordToAdd) {
	        $beforeString = implode(' ', $beforeArray);
	    }
	    else {
	        for($i = 0; $i < $numOfWordToAdd; $i++) {
	            $beforeString = $beforeArray[$i] . ' ' . $beforeString; 
	        }
	    }

	    $afterString = "";
	    if($countAfterArray < $numOfWordToAdd) {
	        $afterString = implode(' ', $afterArray);
	    }
	    else {
	        for($i = 0; $i < $numOfWordToAdd; $i++) {
	            $afterString = $afterString . $afterArray[$i] . ' '; 
	        }
	    }

	    $beforeString =  rtrim($beforeString);
	    $afterString  =  ltrim($afterString);

	    $string = $beforeString . $space_before . '<b style="text-decoration:underline;color:darkred">' .$query . '</b>' . $space_after . $afterString;
	    return $string;
	}

	
?>