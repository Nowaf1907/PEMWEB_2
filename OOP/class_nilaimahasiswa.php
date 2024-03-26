<?php
//Class
Class NilaiSiswa
{
    //property
    public $nim;
    public $nama;
    public $nilai;
    public $matakuliah;

    //method
    public function __construct($_nim, $_nama, $_nilai, $_matakuliah){
        $this->nim = $_nim
        $this->nama = $_nama;
        $this->nilai = $_nilai;
        $this->matakuliah = $_matakuliah;
    }
    
    //method
    public function grade() {
        if ($this->nilai >=85) return "A";
        elseif ($this->nilai >=70) return "B";
        elseif ($this->nilai >=69) return "C";
        elseif ($this->nilai >=55) return "D";
        else return "E";
    }

    //method
    public function getHasil() {
        if ($this->nilai > 55) return "LULUS";
        else return "TIDAK LULUS";
    }
}
?>