<?php
class Home extends System_controller {     
    public function index(){
        $obj = new Models_user();
        $allFilms = $obj->selAllFilms();
        $allVotings = 0;
        $perArray = [];
        foreach($allFilms as $v) {
            $allVotings = $allVotings + $v['votes'];
        }
        if($allVotings != 0){
            foreach($allFilms as $v) {
                $per = round($v['votes']*100/$allVotings, 2).'%';
                array_push($perArray, $per);
            }
        }
        $this->view->allFilms = $allFilms;
        $this->view->perArray = $perArray;
        $this->view->render('home', FALSE);
	}
    public function voting(){
        if(isset($_POST["ajax_film_id"])){
            $film_id = $_POST["ajax_film_id"];
            $allVotings = 0;
            $perArray = [];
            $obj = new Models_user();
            $allFilms = $obj->voting($film_id,FALSE);
            if(empty($allFilms)){
                echo 'error';
            }
            else {
                foreach($allFilms as $v) {
                    $allVotings = $allVotings + $v['votes'];
                }
                foreach($allFilms as $v) {
                    $per = round($v['votes']*100/$allVotings, 2).'%';
                    array_push($perArray, $per);
                }
                echo json_encode($perArray);  
            }
            
        }
    }
            
}

    
