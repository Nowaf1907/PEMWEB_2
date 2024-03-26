
<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas']; 

//buat total nilai
//nilai_uts+nilai_uas+nilai_tugas/3
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//buat Perhitungan IF untuk mencari Grade
if ($total_nilai >=85){
    $grade = "A";
}
elseif ($total_nilai >=70){
    $grade = "B";
}
elseif ($total_nilai >=56){
    $grade = "C";
}
elseif ($total_nilai >=30){
    $grade = "D";
}
else{
    $grade = "E";
}

//Buat Perhitungan SWITHCASE Untuk Mencari Predikat
switch ($grade){
    case "A":
        $predikat = "Sangat memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "kurang memuaskan";
        break;
    default:
        $predikat = "Tidak Ada";
        break;        
}


//Buat Perhitungan IF untuk untuk mencari status lulud/gagal
if ($total_nilai >= 70){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}

//Cetak Hasil:
echo 'Nama:'. $nama. '<br>';
echo 'Mata Kuliah:'. $matkul . '<br>';
echo 'Nilai UTS:'. $nilai_uas . '<br>';
echo 'Nilai UAS:'. $nilai_uas . '<br>';
echo 'Nilai Tugas:'.$nilai_tugas . '<br>';
echo 'Total Nilai:'. $total_nilai . '<br>';
echo 'Grade:'. $grade . '<br>';
echo 'Predikat:'. $predikat . '<br>';
echo 'Status kelulusan:'. $status . '<br>';


?>