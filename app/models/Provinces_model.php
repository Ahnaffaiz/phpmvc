<?php

class Provinces_model {

    private $table = 'provinces';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function getAllProvinces(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProvinceById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single(); 
    }

    public function tambahDataProvinces($data){
        $query = "INSERT INTO provinces (`nama`, `ibukota`, `jml_penduduk`) VALUES (:nama, :ibukota, :jml_penduduk)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('ibukota', $data['ibukota']);
        $this->db->bind('jml_penduduk', $data['jml_penduduk']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataProvinces($id){
        $query= "DELETE FROM provinces WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}