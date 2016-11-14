<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");

$Path['lib'] = './lib/';
require_once $Path['lib'] . 'lib_bibtex.inc.php';

$Site = array();
$Site['bibtex'] = new Bibtex('./bibfiles/useful-data-structure.bib');
$bb = $Site['bibtex'];

ob_start();

if (isset($_POST['cite']))
{
	$citeKeys = $_POST['cite'];
	$citeKeysArray = explode(";", $citeKeys);
	foreach($citeKeysArray as $val){
        $cKeys = explode("@", $val);
        my_cite($cKeys);
        echo "@@";
	}
}
else
{
	return;
}
// cite('siebes06'); 

$citeP = ob_get_contents();
ob_end_clean();
$citeP = str_replace("\n"," ", str_replace('\t', " ", $citeP));

ob_start(); 
$Site['bibtex']->PrintBibliography(); 
$refP = ob_get_contents();
ob_end_clean();
$refP = str_replace("\n"," ", str_replace('\t', " ", $refP));

$output = array(
                "cite" => $citeP,
                "ref"  => $refP,
                );
echo json_encode($output);
?>
