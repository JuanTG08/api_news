<?php

class News {
    private $db;

    public function __construct(){
        $this->db=Connexion::connDb();
    }

    public function getListNews() {
        $sql = $this->db->query("SELECT * FROM news");
        return $sql;
    }
    public function getListParrafos($id) {
        $sql = $this->db->query("SELECT * FROM content WHERE id_content=".$id);
        return $sql->fetch_all();
    }
}