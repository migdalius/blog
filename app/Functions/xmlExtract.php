<?php

function xmlExtractCategories($file_name, $category_tag){	
	echo "entered function";
	$xml = simplexml_load_file($file_name);
	$category_array = array();
	foreach($xml->xpath('//product/category[@name]') as $category_name){
		echo $category_name.'<br/>';
		if(!array_key_exists($category_name, $category_array)){
			$category_array[$category_name]=1;
			echo $category_name;
		}
	}
	
	return $category_array;
}

print_r(xmlExtractCategories('kesi.xml', 'category'));

?>