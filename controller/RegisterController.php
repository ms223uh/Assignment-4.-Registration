<?php

class RegisterController{
    
    private $regView;
    private $regModel;
    
    
    public function __construct(RegisterView $regView, RegisterModel $regModel, User $user, RegisterDAL $registerDAL){
        
        $this->regView = $regView;
        $this->regModel = $regModel;
        $this->user = $user;
        $this->registerDAL = $registerDAL;
   
    }
    
    public function init()
    {
        
       $this->regModel->newUser($this->regView->getUserName(), $this->regView->getPassword(), $this->regView->getrepeatPassword());
        
        
        
        //TA EMOT ETT USEROBJEKT IFRÅN REGISTERMODEL
        
        //SKICKA TILL REGISTERDAL
        
        //HEADER LOCATION TILL ?.
        
    }
    
    

    
    
    

}
