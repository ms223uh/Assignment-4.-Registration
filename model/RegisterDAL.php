<?php

require_once('model/User.php'); 

class RegisterDAL
{
    private $users = array();
    private static $DB = "../data/db.bin";
    private $serialized;
    

            public function addUser($UserName, $Password)
            {
                array_push($this->users, new User($UserName, $Password));
            
                $this->serialized = serialize($this->users);
                
                
                file_put_contents(self::$DB, $this->serialized);
            }
            
            public function getUser()
            {
               
            }
    
    
}