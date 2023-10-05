<?php
$post_data['routers'] = $_POST['routers'];
$post_data['query'] = $_POST['query'];
$post_data['parameter'] = $_POST['parameter'];

//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
	$post_items[] = $key . '=' . $value;
}

//create the final post string
$post_string = implode ('&', $post_items);

//create cURL connection
// $curl_connection = curl_init('https://103.210.73.84/lg/lookingglass/execute.php');
$curl_connection = curl_init('https://10.128.22.52/lg/lookingglass/execute.php');

//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

//perform our request
$result = curl_exec($curl_connection);

//return information regarding the request
echo json_encode($result);

//close the connection
curl_close($curl_connection);
?>