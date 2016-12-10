
<?php


$ci = curl_init();
$url = $urlToImage; // Source file
$fp = fopen("imgs/images.jpg", "w"); // Destination location
curl_setopt_array( $ci, array(
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 3600,
    CURLOPT_FILE => $fp
));
$contents = curl_exec($ci); // Returns '1' if successful
curl_close($ci);
fclose($fp);

?>