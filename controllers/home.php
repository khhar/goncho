<?php
class Home extends System_controller {     
    public function index(){
        $obj = new Models_user();
        $allFilms = $obj->selAllFilms();
        $this->view->allFilms = $allFilms;
        $this->view->render('home', FALSE);
	}
    public function voting(){
        if(isset($_POST["ajax_film_id"])){
            $film_id = $_POST["ajax_film_id"];
            $obj = new Models_user();
            $allFilms = $obj->voting($film_id,FALSE);
        }
    }
            
}

    
