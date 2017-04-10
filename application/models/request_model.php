<?php

class request_model extends CI_Model {

    private $date = 'NOW()';
    private $table = 'request';
    private $key = 'request_id';  

    public function __construct() {
        parent::__construct();
    }

    /* CRUD OPERATIONS */

    public function get($id) {
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

    public function insert($data) {
        try {
            if(empty($data))
                throw new Exception('No data given for request.'); 

            $this->db->insert($this->table, $data);
        } catch (Exception $error) {
            log_message('error', $error->getMessage(). ' in ' . $error->getFile() . ':' . $error->getLine() );
            throw new Exception('Error saving data to database'); 
        }
    }

    public function update($id) {
        $this->db->update($this->table, $this, array($this->key => $id));
    }

    public function delete($id){
        $this->db->delete($this->table, array($this->key => $id)); 
    }
}