<?php

class Anime_model extends CI_model{
    
    public function getAllAnime(){
        return $this->db->get('anime')->result_array();
    }

    public function tambahDataAnime(){
        $data = [
                "judul" => $this->input->post('judul', true),
                "genre" => $this->input->post('genre', true),
                "episode" => $this->input->post('episode', true),
        ];
        $this->db->insert('anime', $data);
    }
    
    public function hapusDataAnime($id){
        // $this->db->where('id', $id);
        $this->db->delete('anime', ['id'=>$id]);
    }
    
    public function getAnimeById($id){
        return $this->db->get_where('anime', ['id'=> $id])->row_array();
    }
    
    public function ubahDataAnime(){
        $data = [
                "judul" => $this->input->post('judul', true),
                "genre" => $this->input->post('genre', true),
                "episode" => $this->input->post('episode', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        
        $this->db->update('anime', $data);
        
    }

    public function cariDataAnime(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul',$keyword);
        $this->db->or_like('genre',$keyword);
        $this->db->or_like('episode',$keyword);
        return $this->db->get('anime')->result_array();
    }

}