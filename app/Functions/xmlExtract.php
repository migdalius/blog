<?php

function xmlExtractCategories($file_name, $category_tag){	
	$xml = simplexml_load_file(asset($file_name));
	$result = $xml->xpath($category_tag);
	
	return $result;
}

//print_r(xmlExtractCategories('{{asset ('vendor/xml/czasnabuty.xml') }}, "category"));

?>