<?php



// Variables;
$url 		= 'https://www.billplz.com/api/v3/bills';
$postfields = array(
	'field1'=>'value1',
	'field2'=>'value2'
);

//Open connection
$ch = curl_init();

// Initialize
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($postfields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

//Execute
$result = curl_exec($ch);

//close connection
curl_close($ch);




curl https://www.billplz.com/api/v3/bills \
  -u 73eb57f0-7d4e-42b9-a544-aeac6e4b0f81: \
  -d collection_id=inbmmepb \
  -d description="Maecenas eu placerat ante." \
  -d email=api@billplz.com \
  -d name="Michael API V3" \
  -d amount=200 \
  -d callback_url="http://example.com/webhook/"
?>