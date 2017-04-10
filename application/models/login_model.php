<?php

class login_model extends CI_Model {

    private $date = 'NOW()';
    private $table = 'login';
    private $key = 'login_id';  

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    /* CRUD OPERATIONS */

    public function get($id){
        try {
            $id = (int) $id; 
            return $this->db->get_where($this->table, array($this->key => $id))->row();
        } catch (Exception $error) {
            log_message('error', $error->getMessage(). ' in ' . $e->getFile() . ':' . $e->getLine() );
            throw new Exception(); 
        }
    }

    public function get_all() {
        try {
            $query = $this->db->get($this->table);
            return $query->result();
        } catch (Exception $error) {
            log_message('error', $error->getMessage(). ' in ' . $e->getFile() . ':' . $e->getLine() );
            throw new Exception(); 
        }
    }

    public function insert() {
        $this->db->insert($this->table, $this);
    }

    public function update($id) {


        $this->db->update($this->table, $this, array($this->key => $id));
    }

    public function delete($id){
        $this->db->delete($this->table, array($this->key => $id)); 
    }
}