<?php


class RegisterModel
{
    
    private $message;
    
        public function __construct()
        {
            
            
        }



            public function newUser($userName, $password, $repeatPassword)
            {
                
                
                
                if($userName == ""){
                    
                    $message = "Username is missing";
                    
                }
                else if($password == "")
                    {
                        
                        $message = "Password is missing";
                        
                    }
                else if($password != $repeatPassword)
                    {
                        
                        $message = "Passwords is not matching";
                        
                    }
                
                
                
                
                //SEND IT BACK TO CONTROLLER
            }
}