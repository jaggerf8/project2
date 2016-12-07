<?php


class curls
{
//echo " we are in curls file";
public function post($url,$content)
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
public function get($url)
{
echo " we are in get function in curls file";
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

}

?>
