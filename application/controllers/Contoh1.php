<?php
class Contoh1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Leonard Jestine Heaven";
    }

    public function biodata()
    {
        echo "<h1>Biodata</h1>";
        echo "Nama : Lenard Jestine Heaven<br>
        Kelas : 17.6A.27<br>
        Prodi : Teknologi Informasi<br>
        Semester : 6<br>
        Alamat : BSD<br>
        ";
        
    }
}