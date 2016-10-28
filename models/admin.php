<?php
class Models_admin extends System_model{
    public function logIn($password, $email){
        $query = $this->db->select("select * from admin where password='$password' and email='$email'")->first();
        return $query;
    }
    public function  getUserById($userid){
        $sellect = $this->db->select("select * from admin where id='$userid'")->first();
        return $sellect;
    }
    public function  insertFilm($film){
        $insert = $this->db->insert('films',array('film_name'=>$film));
        return $insert;
    }
    public function  selAllFilms(){
        $selAllFilms = $this->db->select("select * from films")->all();
        return $selAllFilms;
    }
    public function  updateFilm($id, $film_name, $votes){
        $this->db->update('films',array('film_name'=>$film_name, 'votes'=>$votes,),array('id'=>$id));
    }
}
