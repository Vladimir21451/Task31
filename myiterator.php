<?php
class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "перемотка в начало\n";
        reset($this->var);
    }
  
    public function current()
    {
        $var = current($this->var);
        echo "текущий: $var\n";
        return $var;
    }
  
    public function key() 
    {
        $var = key($this->var);
        echo "ключ: $var\n";
        return $var;
    }
  
    public function next() 
    {
        $var = next($this->var);
        echo "следующий: $var\n";
        return $var;
    }
  
    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        echo "верный: $var\n";
        return $var;
    }

}

//$values = array(1,2,3);

$html = file_get_contents('collect.html');
    $var = new DOMDocument;
    libxml_use_internal_errors( true );
    $var->loadHTML( $html );
    libxml_clear_errors(); 

$it = new MyIterator($dom);
//$metas = $it->getElementsByTagName('meta')[0];
var_dump ($it->key());
foreach ($it as $meta => $b) {
    print "$a: $b\n";
}
?>