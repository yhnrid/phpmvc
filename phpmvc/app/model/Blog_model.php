<?php
class Blog_model
{
    private $blog = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "model"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "view"
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "controller"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
        public function tambahData($data)
        {
            $query = " INSET INTO siswa VALUES
            ('', :nama, :jenis_kelamin, ;NISN) ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->query('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->query('NISN', $data['NISN']);
            $this->db->execute();
           return $this->db->rowCount();



        }
}