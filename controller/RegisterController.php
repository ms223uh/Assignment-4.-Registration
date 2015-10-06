<?php

class RegisterController{
    
    private $regView;
    private $regModel;
    
    
    public function __construct(RegisterView $regView, RegisterModel $regModel){
        
        $this->regView = $regView;
        $this->regModel = $regModel;
        
        
    }
    
    

    
    
    

}
