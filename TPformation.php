<?php

$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->load("formations.xml");

$xpath = new DOMXPath($dom);

// 1 - les valeurs attributs "repere" des éléments matiere
$reperes = $xpath->query("/formations/formation/module/@repere");
echo '<h2>Question 1</h2>';
for ($i = 0; $i < $reperes->length; $i++) {
	echo $reperes->item($i)->nodeValue;
	echo '</br>';
}

// 2 - le nombre de formation
$nb_formation = $xpath->evaluate("count(/formations/formation)");
echo '<h2>Question 2</h2>';
echo "Il y a $nb_formation formations";

// 3 - le nom de tous les  "module"
$name_module = $xpath->query("/formations/formation/module/titre");
echo '<h2>Question 3</h2>';
for ($i = 0; $i < $name_module->length; $i++) {
	echo $name_module->item($i)->nodeValue;
	echo '</br>';
}

// 4 - le texte des sources du module CCI93
$sources = $xpath->query("/formations/formation/module[@repere='CCI93']//source");
echo '<h2>Question 4</h2>';
foreach ($sources as $element) {
	echo "[". $element->nodeName. "]";
	
	$nodes = $element->childNodes;
	foreach ($nodes as $node) {
		echo $node->nodeValue. "<br/>";
	}
}

// 5 - le titre du premier module de la formation MCCI
$first_module = $xpath->query("/formations/formation[@code='MCCI']//module[1]/titre/text()");
echo '<h2>Question 5</h2>';
echo $first_module->item ( 0 )->nodeValue;
echo '</br>';

// 6 - les textes des deux premier élément de chaque modules
$text_module = $xpath->query("//module/*[position() < 3]");
echo '<h2>Question 6</h2>';
for ($i = 0; $i < $text_module->length; $i++) {
	echo $text_module->item($i)->nodeValue;
	echo '</br>';
}

// 7 - le texte dernier élément fils de chaque formation
$last_element_text = $xpath->query("/formations/formation/*[last()]");
echo '<h2>Question 7</h2>';
for ($i = 0; $i < $last_element_text->length; $i++) {
	echo $last_element_text->item($i)->textContent;
	echo '</br>';
}

// 8 - le nombre de point du module ayant pour matière le titre "Système Unix"
$last_element_text = $xpath->query("//module//matiere[titre='Système Unix']/../../points");
echo '<h2>Question 8</h2>';
echo $last_element_text->item(0)->textContent;
echo '</br>';

// 9 - le titre de la formation ayant moins de 2 modules
$little_formation = $xpath->query("//formation[count(module) < 3]/titre");
echo '<h2>Question 9</h2>';
echo $little_formation->item(0)->textContent;
echo '</br>';






















