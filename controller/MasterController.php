<?php

require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');

require_once('model/LoginModel.php');

require_once('controller/LoginController.php');
require_once('controller/RegisterController.php');


class MasterController{
    
    
    public function __construct(){
        
       
        //$rc = new RegisterController();
        
        
                $uri = $_SERVER["REQUEST_URI"];
                $uri = explode("?",$uri);
                
               
                
                    if (count($uri) > 1 && $uri[1] == "register")
                    {
                       echo "register";
                    }
                        else
                        {
                                $lm = new LoginModel();
                                
                                //CREATE OBJECTS OF THE VIEWS
                                $v = new LoginView($lm);
                                $dtv = new DateTimeView();
                                $lv = new LayoutView();
                                
                                $lc = new LoginController($v, $lm);
                                
                                $lv->render($lm->isLoggedin(), $v, $dtv);
                        }
                
                
                
        }
    
    

    
    

}

