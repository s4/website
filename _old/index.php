<?php
require_once 'includes/haml/HamlParser.class.php';

$page = "home";
if(isset($_GET['p'])) {
	$page = $_GET['p'];
}

$nav_bar = array(
	"home" => "./",
	"docs" => "http://wiki.s4.io",
	"code" => "http://github.com/s4",
	"get involved" => "?p=contrib",
	"blog" => "http://blog.s4.io",
	"team" => "?p=team",
#	"demo" => "?p=demo",
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
		        document.write('<a class=\"email\" href=\"mailto:' + name + '@' + domain + '\">');
		        document.write(label + '</a>');
		  // -->
		  </script>"; 
}

function render_google_analytics () {
	echo "<script type='text/javascript'>

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-19490961-1']);
	  _gaq.push(['_setDomainName', '.s4.io']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>";
}

?>