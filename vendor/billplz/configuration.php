<?php
/**
 * Instruction: 
 *  
 * 1. Replace the APIKEY with your API Key.
 * 2. OPTIONAL: Replace the COLLECTION with your Collection ID.
 * 3. Replace the X_SIGNATURE with your X Signature Key
 * 4. Replace the http://www.google.com/ with your FULL PATH TO YOUR WEBSITE. It must be end with trailing slash "/".
 * 5. Replace the http://www.google.com/success.html with your FULL PATH TO YOUR SUCCESS PAGE. *The URL can be overridden later
 * 6. OPTIONAL: Set $amount value.
 * 7. OPTIONAL: Set $fallbackurl if the user are failed to be redirected to the Billplz Payment Page.
 * 
 */
$api_key = 'f16c440a-45b4-4efb-b933-9cc16c184eba';
$collection_id = 'fjml5xkz';
$x_signature = 'S-Gt1wdkJSAthm5nQNljtlmw';

$websiteurl = 'http://www.bimbsec.com.my/';
$successpath = 'http://www.bimbsec.com.my/index.php?p=succesful-payment';
$amount = ''; //Example (RM13.50): $amount = '13.50';
$fallbackurl = ''; //Example: $fallbackurl = 'http://www.google.com/pay.php';
