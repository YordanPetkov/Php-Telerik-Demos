<?php
interface iTemplate {
    public function set ($name, $value);
    public function getHTML($template);
}

class Template implements iTemplate {
    private $vars = [];
    public function set ($name, $value) {
        $this->vars[$name] = $value;
    }

    public function getHTML($template){
        foreach($this->vars as $name=>$value) {
            $template = str_replace(
                '{'.$name.'}', $value, $template);
        }
        return $template;
    }
}

//class_implements($class); 
//-> return array with all interfaces which class implements.

$myObj = new Template();
$myObj->set("gosho",5);

echo $myObj->getHTML("{gosho}");