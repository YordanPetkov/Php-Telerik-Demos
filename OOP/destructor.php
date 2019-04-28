<?php

class Demo {
    private $fp;

    public function __construct($name) {
        if($name){
            $this->openFile($name);
        }
    }

    public function __destruct() {
        $this->closeFile();
    }

    public function openFile($name) {
        if($name){
            if($this->fp = fopen($name, 'r'))
                echo "File is opened. <br />";
        }

        return (bool) $this->fp;
    }

    public function closeFile() {
        if($this->fp){
            fclose($this->fp);
            echo "File is closed. <br />";
        }
        
    }
}


$myFile = new Demo("test1.txt");

unset($myFile);
