<?php
require_once 'includes/haml/HamlParser.class.php';

$page = "home";
if(isset($_GET['p'])) {
	$page = $_GET['p'];
}

$nav_bar = array(
	"home" => "./",
	"docs" => "?p=docs",
	"downloads" => "http://github.com/s4",
	"contribute" => "?p=contrib",
	"demo" => "?p=demo",
	)
;

// TODO: check for template existence

$parser = new HamlParser('./haml', './haml/cache');
$parser->assign('page', $page);
$parser->assign('nav_bar', $nav_bar);
echo $parser->setFile('layout.haml');

function email($u, $d, $l) {
	echo "<script language='JavaScript'> 
		  <!-- // go away spammer!
				var name = '$u';
				var domain = '$d';
				var label = '$l';
		        document.write('<a class=\"email\" href=\"mailto:\" + name + \"@\" + domain + \">');
		        document.write(label + '</a>');
		  // -->
		  </script> 
";
}

?>