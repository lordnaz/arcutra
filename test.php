<?php 

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://staging.lcpay.my/fpxreceipt.php");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

print_r($output);
// close curl resource to free up system resources
curl_close($ch); 

echo "nice";
?>