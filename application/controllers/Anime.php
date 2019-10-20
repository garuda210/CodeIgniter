<?php

class Anime extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Anime_model');
        $this->load->library('form_validation');
        
        
    }
    
    public function index(){
        $data['judul'] = 'Daftar Anime';
        $data['anime'] = $this->Anime_model->getAllAnime();
        if ($this->input->post('keyword')) {
            $data['anime'] = $this->Anime_model->cariDataAnime();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('anime/index');
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Data anime';
        
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('genre', 'Genre', 'required');
        $this->form_validation->set_rules('episode', 'Episode', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('anime/tambah');
            $this->load->view('templates/footer');
        }else {
            $this->Anime_model->tambahDataAnime();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('anime');
        }   
    }
    
    public function hapus($id){
        $this->Anime_model->hapusDataAnime($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('anime');
    }

    public function detail($id){
        $data['judul']='Detail Data anime';
        $data['anime'] = $this->Anime_model->getAnimeById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('anime/detail',$data);
        $this->load->view('templates/footer');;
    }
    public function ubah($id){
        $data['judul'] = 'Form Ubah Data Anime';
        $data['anime'] = $this->Anime_model->getAnimeById($id);
        $data['genre'] = ['Sport', 'Actions', 'Thriller', 'Comedi', 'Sci-FI'];
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('genre', 'Genre', 'required');
        $this->form_validation->set_rules('episode', 'episode', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('anime/ubah');
            $this->load->view('templates/footer');
        }else {
            $this->Anime_model->ubahDataAnime();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Anime');
        }   
    }
}