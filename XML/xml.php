<?php

header('Content-Type: text/xml');

$people = array(
		array(
				'nom' => 'The Big Bang Theory',
				'chaine' => 'ABC',
				'duration' => '30'
		),
		array(
				'nom' => 'The IT Crow',
				'chaine' => 'Channel 9',
				'duration' => '20'
		)
);

print '<?xml version="1.0" ?>';
print '<shows>';

foreach ($people as $show) {
	foreach ($show as $tag => $data) {
		print "<$tag>$data</$tag>";
	}
}
print '</shows>';