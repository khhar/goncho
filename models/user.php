<?php
class Models_user extends System_model{
    public function  insertFilm($film){
        $insert = $this->db->insert('films',array('film_name'=>$film));
        return $insert;
    }
    public function  selAllFilms(){
        $selAllFilms = $this->db->select("select * from films")->all();
        return $selAllFilms;
    }
    public function  voting($id,$type){
       $this->db->update('films',array('votes'=>"votes+1"),array('id'=>$id),$type);
    }
}