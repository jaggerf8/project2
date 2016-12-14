<?php

function post($url,$content)
{
	
	$curl = curl_init();
	
	curl_setopt_array($curl, array(
    	CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
	CURLOPT_USERAGENT => 'curl get',
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => $content));
	
	$info= curl_exec($curl);
	if(curl_errno($curl)){
	        throw new Exception(curl_error($curl));}
	return  $info;
	
	curl_close($curl);

}
function get($url)
{

	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $url,
	CURLOPT_USERAGENT => 'curl get'));

	$info = curl_exec($curl);
	if(curl_errno($curl)){
	        throw new Exception(curl_error($curl));}
	return $info;
	curl_close($curl);
}							

echo 'this is an example of a curl "get" method pulling the content from the wikipedia page on
"php"<br><br><br>' . get('https://en.wikipedia.org/wiki/PHP');

?>
