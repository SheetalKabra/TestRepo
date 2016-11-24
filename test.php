<?php 
//changes in file to commit changes in git
echo "changes in git";


$strArray = array();
$existingString = 'li';
for($string='aa';$string<='zz';$string++){
	if($string === 'aaa'){
		break;
	}
	$strArray[] = $string;
}
echo "<pre>";//print_r($strArray);
$currentIndex = array_search($existingString, $strArray);
echo $currentIndex;
array_splice($strArray,0,$currentIndex+1);
print_r($strArray);
die;







$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
$arraySlice = array_slice($a1,0,3);

$arraySplice = array_splice($a1,0,3);
//echo "<pre>";print_r($arraySplice);
echo "<pre>";print_r($arraySlice);
echo "<pre>";print_r($a1);


die;
$link = "http://www.dobermannpedigrees.nl/modules/pedigree/pedigree.php?pedid=187750";
//$pos = strpos($link,"?pedid=");

if (($pos = strpos($link, "?pedid=")) !== FALSE) {
	echo $pos;
	$key[] = substr($link, $pos+7);
	echo "<pre>";print_r($key);
}else{
	echo "else";
}


?>