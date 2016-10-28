<?php
class Error extends System_controller {  
	public function index(){
        $this->view->render('error', FALSE);    
    }
}