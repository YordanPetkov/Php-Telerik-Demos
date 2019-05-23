<?php

interface IWriteInterface {
    public function write($data);
}

class Article {
    private $data;
    
    public function write($obj) {
        if($obj instanceof IWriteInterface){
            $obj->write($this->data);
        }
        
    }
}

class FileWriter implements IWriteInterface{
    
    public function write($data) {
        echo 'write to file';
    }
}

class SendToSocket implements IWriteInterface{
    
    public function write($data) {
        
        echo 'write to socket';
    }
}

$a = new Article();
$writer = new FileWriter();
$a->write($writer);


