<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PRAKTIKUM</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 3</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Nilai Siswa</h1>
<form method="GET" action="hasil_nilai.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="PEMWEB">PEMWEB</option>
        <option value="UI/UX">UI/UX</option>
        <option value="DDP">DDP</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


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
<?php
include_once 'footer.php'
?>