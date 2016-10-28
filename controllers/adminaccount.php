<?php
class Adminaccount extends System_controller {
    function __construct() {
        parent::__construct();
        if(!isset($_SESSION['id'])){
            header("Location:/kino/"); 
        }
    }
    public function index() {
        $obj = new Models_admin();
        $admin = $obj->getUserById($_SESSION['id']);
        if(isset($_POST['insert'])){
                $film = $_POST["film"];
                $result = $obj->insertFilm($film);
            }
        $allFilms = $obj->selAllFilms();
        $this->view->admin_inf = $admin;
        $this->view->allFilms = $allFilms;
        $this->view->render('admin-home'); 
    }
    public function updateFilm() {
        if(isset($_POST["ajax_film_id"])){
            $film_id = $_POST["ajax_film_id"];
            $film_name = $_POST["ajax_film_name"];
            $film_votes = $_POST["ajax_film_votes"];
            $obj = new Models_admin();
            $updateingFilm = $obj->updateFilm($film_id, $film_name, $film_votes);
        }
    }
}
