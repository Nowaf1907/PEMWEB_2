<?php

class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Inisialisasi variabel untuk menyimpan hasil perhitungan dan input
$panjang = $lebar = $keliling = $luas = "";

// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai panjang dan lebar dari formulir
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    // Validasi input
    if (is_numeric($panjang) && is_numeric($lebar)) {
        // Buat objek persegi panjang
        $persegiPanjang = new PersegiPanjang($panjang, $lebar);

        // Hitung keliling dan luas persegi panjang
        $keliling = $persegiPanjang->hitungKeliling();
        $luas = $persegiPanjang->hitungLuas();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Panjang dan lebar harus berupa angka.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Keliling dan Luas Persegi Panjang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Menghitung Keliling dan Luas Persegi Panjang</h1>
        <form method="POST" action="#">
            <div class="form-group row">
                <label for="panjang" class="col-sm-4 col-form-label">Panjang:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Masukkan panjang" value="<?php echo $panjang; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-sm-4 col-form-label">Lebar:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Masukkan lebar" value="<?php echo $lebar; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>

        <?php if (!empty($keliling) && !empty($luas)): ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Hasil Perhitungan</h4>
                <p>Panjang: <?php echo $panjang; ?></p>
                <p>Lebar: <?php echo $lebar; ?></p>
                <p>Keliling Persegi Panjang: <?php echo $keliling; ?></p>
                <p>Luas Persegi Panjang: <?php echo $luas; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>