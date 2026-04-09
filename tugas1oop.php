<?php

class Produk {
    private $kodeProduk;
    private $namaProduk;
    private $harga;

    public function __construct($kodeProduk, $namaProduk, $harga) {
        $this->kodeProduk = $kodeProduk;
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    public function setKodeProduk($kodeProduk) {
        $this->kodeProduk = $kodeProduk;
    }

    public function getKodeProduk() {
        return $this->kodeProduk;
    }

    public function setNamaProduk($namaProduk) {
        $this->namaProduk = $namaProduk;
    }

    public function getNamaProduk() {
        return $this->namaProduk;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function tampilkanInfo() {
        return "
        <p><b>Kode Produk:</b> {$this->getKodeProduk()}</p>
        <p><b>Nama Produk:</b> {$this->getNamaProduk()}</p>
        <p><b>Harga:</b> Rp " . number_format($this->getHarga(), 0, ',', '.') . "</p>
        ";
    }
}

class Elektronik extends Produk {
    private $garansi;

    public function __construct($kodeProduk, $namaProduk, $harga, $garansi) {
        parent::__construct($kodeProduk, $namaProduk, $harga);
        $this->garansi = $garansi;
    }

    public function setGaransi($garansi) {
        $this->garansi = $garansi;
    }

    public function getGaransi() {
        return $this->garansi;
    }

    public function tampilkanInfo() {
        return parent::tampilkanInfo() . "
        <p><b>Garansi:</b> {$this->getGaransi()}</p>
        ";
    }
}

class Handphone extends Elektronik {
    private $merk;

    public function __construct($kodeProduk, $namaProduk, $harga, $garansi, $merk) {
        parent::__construct($kodeProduk, $namaProduk, $harga, $garansi);
        $this->merk = $merk;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function tampilkanInfo() {
        return "
        <p><b>Kode Produk:</b> {$this->getKodeProduk()}</p>
        <p><b>Nama Produk:</b> {$this->getNamaProduk()}</p>
        <p><b>Harga:</b> Rp " . number_format($this->getHarga(), 0, ',', '.') . "</p>
        <p><b>Garansi:</b> {$this->getGaransi()}</p>
        <p><b>Merk:</b> {$this->getMerk()}</p>
        ";
    }
}

$produk1 = new Elektronik("EL01", "Mesin Cuci", 2500000, "2 Tahun");
$produk2 = new Handphone("HP01", "iQOO 15R", 7300000, "1 Tahun", "iQOO");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk Elektronik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Sistem Manajemen Produk Elektronik</h1>

    <div class="card">
        <h2>Data Produk 1</h2>
        <?php echo $produk1->tampilkanInfo(); ?>
    </div>

    <div class="card">
        <h2>Data Produk 2</h2>
        <?php echo $produk2->tampilkanInfo(); ?>
    </div>
</body>
</html>