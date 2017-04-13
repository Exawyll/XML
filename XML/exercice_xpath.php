<?php

$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->load("formations.xml");
$xpath = new DOMXPath($dom);

//Question 1
//1 - les valeurs attributs "repere" des éléments module
$reperes = $xpath->query("/formations/formation/module/@repere");
echo "<h2>Question 1</h2>";
for ($i = 0; $i < $reperes->length ; $i++){
    echo $reperes->item($i)->textContent;
    echo "<br />";
}

//2 - le nombre de formation
$nombre_formations = $xpath->evaluate("count(/formations/formation)");
echo "<h2>Question 2</h2>";
echo "Il y a $nombre_formations formations";

//3 - le titre de tous les  "module"
$noms_modules = $xpath->query("//module/titre");
echo "<h2>Question 3</h2>";
for ($i = 0; $i < $noms_modules->length ; $i++){
    echo $noms_modules->item($i)->nodeValue;
    echo "<br />";
}

//4 - le texte des sources du module CCI93
$query= "/formations/formation/module[@repere = 'CCI93']//source/text()";
$sources = $xpath->query($query);
echo "<h2>Question 4</h2>";
for ($i = 0; $i < $sources->length ; $i++){
    echo $sources->item($i)->textContent;
    echo "<br />";
}

//5 - le titre du premier module de la formation MCCI
$query = "/formations/formation[@code = 'MCCI']/module[1]/titre";
$titre_formation = $xpath->query($query);
echo "<h2>Question 5</h2>";
echo $titre_formation->item(0)->nodeValue;
echo "<br />";

//6 - les textes des deux premier élément de chaque module
$query = "/formations/formation/module/*[position() < 3]";
$premiers_elements = $xpath->query($query);
echo "<h2>Question 6</h2>";
for ($i = 0; $i < $premiers_elements->length ; $i++){
    echo $premiers_elements->item($i)->textContent;
    echo "<br />";
}

//7 - le texte du dernier élément fils de chaque formation
$query = "/formations/formation/*[last()]";
$dernier_elements = $xpath->query($query);
echo "<h2>Question 7</h2>";
for ($i = 0; $i < $dernier_elements->length ; $i++){
    echo $dernier_elements->item($i)->textContent;
    echo "<br />";
}

//8 - le nombre de point du module ayant pour matière le titre "Système Unix"
$query = "//module//matiere[titre='Système Unix']/../../points";
$query = "//module[//titre = 'Système Unix']/points";
$points = $xpath->query($query);

echo "<h2>Question 8</h2>";
    echo $points->item(0)->textContent;
    echo "<br />";

// 9 - le titre de la formation ayant moins de 2 modules
$little_formation = $xpath->query ( "//formation[count(module) < 3]/titre" );
echo '<h2>Question 9</h2>';
echo $little_formation->item ( 0 )->textContent;
echo '</br>';
    
    
    
    
    