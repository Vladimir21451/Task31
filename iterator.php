<?php
    $html = file_get_contents('collect.html');
    $dom = new DOMDocument;
    libxml_use_internal_errors( true );
    $dom->loadHTML( $html );
    libxml_clear_errors(); 
   // $dom->saveHTML( $dom->documentElement );
   //$meta = $dom->getElementsByTagName('meta')[1];
    //var_dump ($meta);
    $metas = $dom->getElementsByTagName('meta');
    echo ('Все "meta"');
foreach ($metas as $meta) {
  echo '<pre>';
  var_dump ($meta->tagName);
  var_dump ($valueID = $meta->getAttribute('name'));
  var_dump ($val = $meta->getAttribute('content'));
  echo '</pre>';   
}
echo( 'Все " meta-keywords"');
foreach ($metas as $meta) {
  echo '<pre>';
  $valueID = $meta->getAttribute('name');
  $val = $meta->getAttribute('content');
  if ($valueID == "keywords"){
   var_dump ($meta->tagName); 
  var_dump ($valueID);
  var_dump ($val);
  echo '</pre>';
  }
}      

echo( 'Все " title"');
$titles = $dom->getElementsByTagName('title');
foreach ($titles as $title) {
  echo '<pre>';
  //$valueID = $title->getAttribute('name');
  $val = $title->textContent;
  var_dump ($title->tagName); 
 // var_dump ($valueID);
  var_dump ($val);
  echo '</pre>';
  }
      