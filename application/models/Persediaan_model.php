<?php

class Persediaan_model extends CI_model{
    public function getAllPersediaan()
    {
       return $this->db->get('persediaan')->result_array;
    }
}