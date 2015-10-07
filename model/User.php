<?php

class User {
    
    
    public $UserName;
    public $Password;
    
    public function __construct($UserName, $Password){
        $this->UserName = $UserName;
        $this->Password = $Password;
        
    }
    
    
    
    
}