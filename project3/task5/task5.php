<?php
$file = "./test.html";
$doc = new DOMDocument;
libxml_use_internal_errors(true);
$doc->loadHTMLFile($file);

echo '<h3>Загаловки с новостного сайти:<h3>';
$elements = $doc->getElementsByTagName('h2');
if (!is_null($elements)) {
    foreach ($elements as $element) {
    echo "<br/>";
    
    $nodes = $element->childNodes;
    foreach ($nodes as $node) {
        echo $node->nodeValue. "\n";
    }
}
}
?>
