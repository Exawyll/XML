<?php
$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->load("people.xml");


//Retrouver des balises par leur nom
//DOMNodeList
/*$values = $dom->getElementsByTagName("Description");

if($values !== null){
    for ($i = 0; $i < $values->length ; $i++){
        //DOMElement
        var_dump($values->item($i));
    }

}
*/

//XPath

$xpath = new DOMXPath($dom);
$values = $xpath->query("/People/Person[contains(./Name/text(), 'Georges') ]");


    //var_dump($values);

for ($i = 0; $i < $values->length ; $i++){
    //DOMElement
    var_dump($values->item($i)->nodeName);
   // var_dump($values->item($i)->nodeValue);
}




