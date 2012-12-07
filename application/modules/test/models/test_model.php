<?php
    class Test_model extends CI_Model {

        function __construct(){
            $this->load->database();
            parent::__construct();
        }

        public function execute(){
            $sql = 'SELECT * FROM `user` WHERE id = 1;';
            $query = $this->db->query($sql);
            return $query->result();
        }

    }