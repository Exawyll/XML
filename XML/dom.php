<?php

//Créer un document XML grâce à DOM

//Création du DOM (un arbre XML en mémoire)
$dom = new DOMDocument('1.0');

//Création de la racine people
$people = $dom->createElement('People');

//ajout de la racine dans le document XML
$dom->appendChild($people);

//Création de la personne 1
$person1 = $dom->createElement("Person");

//Création des attributs de la personne 1
$attribute = $dom->createAttribute('bornDate');
$attribute->appendChild($dom->createTextNode("1921-10-22"));
$person1->appendChild($attribute);

$attribute = $dom->createAttribute('dieDate');
$attribute->appendChild($dom->createTextNode("1981-10-29"));
$person1->appendChild($attribute);

//Création du nom de la personne
$name = $dom->createElement("Name");
//Ajout du texte dans le nom de la personne
$name->appendChild($dom->createTextNode("George Brassens"));
//Ajout du nom de la personne dans la balise personne
$person1->appendChild($name);

//Idem pour la chaine
$chaine1 = $dom->createElement("Description");
$chaine1->appendChild($dom->createTextNode("Georges Brassens, né à Sète le 22 octobre 19211 et mort à Saint-Gély-du-Fesc le 29 octobre 1981, est un poète auteur-compositeur-interprète français."));
$person1->appendChild($chaine1);

$people->appendChild($person1);

//Création de la série 1
$person2 = $dom->createElement("Person");

$attribute = $dom->createAttribute('bornDate');
$attribute->appendChild($dom->createTextNode("1929-04-08"));
$person2->appendChild($attribute);

$attribute = $dom->createAttribute('dieDate');
$attribute->appendChild($dom->createTextNode("1979-10-09"));
$person2->appendChild($attribute);

//Création du nom de la série
$name = $dom->createElement("Name");
//Ajout du texte dans le nom de la série
$name->appendChild($dom->createTextNode("Jacques BREL"));
//Ajout du nom de la série dans la série
$person2->appendChild($name);

//Idem pour la chaine
$chaine2 = $dom->createElement("Description");
$chaine2->appendChild($dom->createTextNode("Jacques Brel, né le 8 avril 1929 à Schaerbeek, une commune de Bruxelles (Belgique), et mort le 9 octobre 1978 à Bobigny (France), est un auteur-compositeur-interprète, acteur et réalisateur belge."));
$person2->appendChild($chaine2);

$people->appendChild($person2);


header('Content-Type: text/xml');
echo $dom->saveXML();