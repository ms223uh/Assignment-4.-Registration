<?php 
session_start();
class LoginModel {
    
    private $name;
    private $password;
    
    private $message;

    private $loggedIn;

    function checkLogin ($inputName, $inputPassword)
    {
        $this->name = "Admin";
        $this->password = "Password";
        
        
        $log = false;
        $this->loggedIn = $log;

        
        
        if($this->name == $inputName && $this->password == $inputPassword)
        {
            
             $message = "Welcome";
            
            if(isset($_SESSION["name"]) && isset($_SESSION["password"])){

                unset($_SESSION["name"]);
                unset($_SESSION["password"]);
                $message = "";

        }
            
        
            $_SESSION["name"] = $inputName;
            $_SESSION["password"] = $inputPassword;
            
           
    
            $log = true;
            $this->loggedIn = $log;
 
        }
        
        else if($inputName == "")
        {
            
            $message = "Username is missing";
            
        }
        
        else if($inputPassword == "")
        {
            
            $message = "Password is missing";
            
        }
        
        else if($this->name == $inputName && $inputPassword == "")
        {
            
            $message = "Admin";
            
        }
        
        else
        {
            $message = "Wrong name or password";
        }
        
        $this->message = $message;

    } 
    
    
    
    
    public function responseModel(){
        
        return $this->message;
        
    }
    
    public function isLoggedin()
    {
        if(isset($_SESSION["name"]) && isset($_SESSION["password"]))
        {
            return $this->loggedIn = true;
        }
        else 
        {
            return $this->loggedIn = false;
        }
    }
    
    public function logout(){
        if(isset($_SESSION["name"]) && isset($_SESSION["password"])){
        $this->message = "Bye bye!";
        }
        
        unset($_SESSION["name"]);
        unset($_SESSION["password"]);
        
    }
    
}