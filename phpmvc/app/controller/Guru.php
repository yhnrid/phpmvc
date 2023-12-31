<?php

class guru extends Controller
{
    public function index(){
        $data = [
            "judul" => "Data guru",
            "guru" => $this->model("guru_model")->getAllBlog()
        ];
        $this->view('template/header', $data);
        $this->view('guru/index', $data);
        $this->view('template/footer');
        return $this->view("guru/index", $data);
    }

    public function detail($id)
    {
        $data = [
            "judul" => "Detail guru",
            "guru" => $this->model("guru_model")->getBlogById($id)         
        ];
        $this->view('template/header', $data);
        $this->view('guru/detail', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if( $this->model('guru_model')->tambahDataGuru($_POST) > 0 ) {
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/guru');
        }
    }
    public function hapus($id)
    {
        if( $this->model('guru_model')->hapusDataGuru($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('tidak_berhasil', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/guru');
        }
    }
    public function getubah()
    {
        if ($this->model('guru_model')->ubahDataGuru($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    
}
}