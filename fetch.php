<?php
include 'simple_html_dom.php';
$maxSGPA = 0;
$topper = "Couldn't find topper in this range.";
for($roll = $argv[1]; $roll <= $argv[2]; $roll++){
	$link = "http://results.bput.ac.in/525_RES/".$roll.".html";
	if (url_exists($link) == true) {
		//echo $link.PHP_EOL;
		$html = file_get_html($link);

		$college = $html->find("table.formTextWithBorder > tbody > tr > td",5)->plaintext;
		//echo $college;
		$branch = $html->find("table.formTextWithBorder > tbody > tr > td",7)->plaintext;

		if($college == "COLLEGE OF ENGINEERING &amp; TECHNOLOGY, BHUBANESWAR"){

			if($branch == "INFORMATION TECHNOLOGY"){

				$name = $html->find("table.formTextWithBorder > tbody > tr > td",3)->plaintext;
				$regex = '#SGPA:</b> (.+?)</#';
				preg_match($regex,$html,$match);

				//var_dump($match);
				$sgpa = $match[1];
				if ($maxSGPA < $sgpa){
					$maxSGPA = $sgpa;
					$topper = $name;
				}
				echo $roll." | ".str_pad($branch, 23)." | ".$name." - ".$sgpa.PHP_EOL;
			}
		}
	}
}

echo PHP_EOL."Topper is $topper - $maxSGPA".PHP_EOL;

function url_exists($url) {
	$file_headers = @get_headers($url);
	if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
	    $exists = false;
	}
	else {
	    $exists = true;
	}
	return $exists;
}
?>
