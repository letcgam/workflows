<?php
class Usuario_model extends CI_Model {
    public function store($dados) {
        $this->db->insert("usuario", $dados);

        return $this->db->insert_id() ?: 0;
    }
}
