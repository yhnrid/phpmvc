<?php
class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = "Blog";
        $data['blog'] = $this->model('Blog_model')->getAllBlog();
        $this->view('template/header', $data);
        $this->view('Blog/index', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
         if ($this->model('siswa_model')->tambahData($_POST)  >  0){
            header('Location: ' .BASE_URL . '/siswa');
            exit;
         }
    }
}