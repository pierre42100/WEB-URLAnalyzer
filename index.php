<?php
/**
 * URL library example
 * 
 * @author Pierre HUBERT
 */

require __DIR__."/URLanalyzer.php";

//Test url
$url = "http://www.01net.com/editorial/656085/tissu-connecte-detection-de-mouvement-nous-avons-essaye-les-derniers-projets-futuristes-de-google/";

//Perform analyze
echo "<pre>";
print_r(URLAnalyzer::analyze($url));