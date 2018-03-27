<?php
	date_default_timezone_set('Asia/Kuala_Lumpur');


// ***********************
// Fetch feed from source
// ***********************
		
	$feed = array(array());


	// The Star (Business)
	$url = 'http://www.thestar.com.my/rss/editors-choice/business/';

	$file = simplexml_load_file($url);
	$channel = $file->xpath("channel");
		
	$items = ($channel[0]->item);
	$i = 0;
	foreach ($items as $item) {
		$feed[$i]['title'] = (string) $item->title;
		$feed[$i]['link'] = (string) $item->link;

		$image  = $item->enclosure['url'];
	    $feed[$i]['image'] = $image;

		$time_tmp = (string) $item->pubDate ;
		$feed[$i]['time'] = strtotime($time_tmp) ;
		$feed[$i]['source'] = "The Star";
		$i += 1;
	}

	$next_num = $i;



	// The Edge (Top Stories)
	$url = 'https://www.theedgemarkets.com/mytopstories.rss';
	$file = simplexml_load_file($url);
	$channel = $file->xpath("channel");
		
	$items = ($channel[0]->item);
	$i = $next_num;
	foreach ($items as $item) {
		$feed[$i]['title'] = (string) $item->title;
		$feed[$i]['link'] = (string) $item->link;

		$desc  = $item->description; 
	    preg_match_all('/https:\/\/.*src/', $desc, $image);
	    $image = ($image[0][0]);
	    $image = preg_replace('/<a.*"/', '', $image);
	    $image = str_replace('"> src', '', $image);
	    $feed[$i]['image'] = $image;

		$time_tmp = (string) $item->pubDate ;
		$feed[$i]['time'] = strtotime($time_tmp);
		$feed[$i]['source'] = "The Edge";
		$i += 1;
	}

	$next_num = $i;



	// The Edge (My Corporate)
	$url = 'https://www.theedgemarkets.com/mycorporate.rss';
	$file = simplexml_load_file($url);
	$channel = $file->xpath("channel");
		
	$items = ($channel[0]->item);
	$i = $next_num;
	foreach ($items as $item) {
		$feed[$i]['title'] = (string) $item->title;
		$feed[$i]['link'] = (string) $item->link;
		
		$desc  = $item->description; 
	    preg_match_all('/https:\/\/.*src/', $desc, $image);
	    $image = ($image[0][0]);
	    $image = preg_replace('/<a.*"/', '', $image);
	    $image = str_replace('"> src', '', $image);
	    $feed[$i]['image'] = $image;

		$time_tmp = (string) $item->pubDate ;
		$feed[$i]['time'] = strtotime($time_tmp);
		$feed[$i]['source'] = "The Edge";
		$i += 1;
	}

// ***********************
// Sorting the newsfeed and delete duplicate title
// ***********************


	// Sort news by time
		
	usort($feed, "sort_by_time");
	$feed = array_reverse($feed);		// Reverse it to be the latest first


	$feed_temp = array();
	foreach ($feed as $news) {
	  if (isset($feed_temp[$news['title']])) {
	    // found duplicate
	    continue;
	  }
	  // remember unique item
	  $feed_temp[$news['title']] = $news;
	}
	// if you need a zero-based array, otheriwse work with $feed_temp
	$feed = array_values($feed_temp);

// ***********************
// View the newsfeed
// ***********************

	if (!isset($_GET['p'])) {
		echo '<div rows="40" style="width:100%">';
			$feed = array_slice($feed, 0, 3);		// Select only 5 latest news
			foreach ($feed as $news) {
				$time = date("Y-m-d H:i:s",$news['time']); // Parse the time to datetime format
				$time_str = time2str($time);
				echo '<a href="'.$news['link'].'" target="_blank" rel="noopener" style="color:#ddf71c">'
					.$news['title'].'<br>'
					.'</a><small><b>'
					.$news['source'].'</b> // <span title="'.$time.'">'
					.$time_str.'</span></small><br><br>';
			}
		echo "</div>";
	}else{ 
		foreach ($feed as $news) { 
			$time = date("Y-m-d H:i:s",$news['time']); // Parse the time to datetime format
			$time_str = time2str($time); ?>
			<div class="col-md-4 p-2">
				<a href="<?php echo $news['link'] ?>" class="text-dark" target="_blank" rel="noopener">
					<div class="card">
						<div class="card-body p-0" style="height: 200px; overflow: hidden;">
							<img src="<?php if ( $news['image'] != '' ) { echo ($news['image']); }else{ echo('image/logo-bimbsec.png'); } ?>" style="width: 130%" class="m-0">
						</div>
						<div class="card-footer" style="min-height: 98px">
							<div class="d-flex justify-content-between">
								<div><small><span title="<?php echo $time ?>"><i><?php echo $time_str ?></i></span></small></div>
								<div><span class="badge badge-dark"><?php echo $news['source'] ?></span><br></div>
							</div>
							<div>
								<b><?php echo $news['title'] ?></b>
							</div>
						</div>
					</div>
				</a>
			</div>
	<?php } 

	}
	


// ***********************
// Functions
// ***********************

	// Sorting array based on subarray values
	function sort_by_time($a, $b) {
	  return $a['time'] - $b['time'];
	}

	// Convert time to relative strings e.g.: 1 minutes ago, today, yesterday
	function time2str($ts) {
	    if(!ctype_digit($ts)) {
	        $ts = strtotime($ts);
	    }
	    $diff = time()- $ts;
	    if($diff == 0) {
	        return 'now';
	    } elseif($diff > 0) {
	        $day_diff = floor($diff / 86400);
	        if($day_diff == 0) {
	            if($diff < 60) return 'just now';
	            if($diff < 120) return '1 minute ago';
	            if($diff < 3600) return floor($diff / 60) . ' minutes ago';
	            if($diff < 7200) return '1 hour ago';
	            if($diff < 86400) return floor($diff / 3600) . ' hours ago';
	        }
	        if($day_diff == 1) { return 'Yesterday'; }
	        if($day_diff < 7) { return $day_diff . ' days ago'; }
	        if($day_diff < 31) { return ceil($day_diff / 7) . ' weeks ago'; }
	        if($day_diff < 60) { return 'last month'; }
	        return date('F Y', $ts);
	    } else {
	        $diff = abs($diff);
	        $day_diff = floor($diff / 86400);
	        if($day_diff == 0) {
	            if($diff < 120) { return 'in a minute'; }
	            if($diff < 3600) { return 'in ' . floor($diff / 60) . ' minutes'; }
	            if($diff < 7200) { return 'in an hour'; }
	            if($diff < 86400) { return 'in ' . floor($diff / 3600) . ' hours'; }
	        }
	        if($day_diff == 1) { return 'Tomorrow'; }
	        if($day_diff < 4) { return date('l', $ts); }
	        if($day_diff < 7 + (7 - date('w'))) { return 'next week'; }
	        if(ceil($day_diff / 7) < 4) { return 'in ' . ceil($day_diff / 7) . ' weeks'; }
	        if(date('n', $ts) == date('n') + 1) { return 'next month'; }
	        return date('F Y', $ts);
	    }
	}
?>