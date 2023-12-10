<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function cekData($where)
    {
    return $this->db->get_where('user', $where);
    }
    public function getReview() {
            $user = $this->session->userdata('username');
            $this->db->select('tipe.nama as tipe, user.username as username, mobil.nama as nama, mobil.gambar as gambar, review.massage, review.rating');
            $this->db->from('review');
            $this->db->join('user', 'user.id_user = review.id_user');
            $this->db->join('mobil', 'mobil.id = review.id');
            $this->db->join('tipe', 'tipe.id_tipe = mobil.id_tipe');
            $this->db->where("user.username = ",$user);
            $this->db->order_by('id_review','desc');    
        
            $query = $this->db->get();
            return $query->result_array();
    }
    public function getTotal() {
        $user = $this->session->userdata('username');
        $this->db->select('COUNT(*) as total');
        $this->db->from('review');
        $this->db->where("user.username = ",$user);
        $this->db->join('user', 'user.id_user = review.id_user');

        $query = $this->db->get();
        return $query->row()->total;
    }
    public function getInfo() {
            $user = $this->session->userdata('username');
            $this->db->select("id_user, username, nama, email, nohp, gambar");
            $this->db->from("user");
            $this->db->where("username = ",$user);

            $query = $this->db->get();
            return $query->result_array();
}
}
