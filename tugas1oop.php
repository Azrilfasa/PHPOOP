<?php
    class produk {
        private $kodeProduk;
        private $namaProduk;
        private $harga;


        public function __construct($kodeProduk, $namaProduk, $harga) {
            $this->kodeProduk = $kodeProduk;
            $this->namaProduk = $namaProduk;
            $this->harga = $harga;
        }

        public function getKodeProduk(){
            return $this->$kodeProduk;
        }

        public function setKodeProduk(){
            $this->kodeProduk = $kodeProduk;
        }

        public function getNamaProduk(){
            return $this->$namaProduk;
        }

        public function setNamaProduk(){
            $this->namaProduk = $namaProduk;
        }

        public function getHarga(){
            return $this->$harga;
        }

        public function setHarga(){
            $this->harga = $harga;
        }

        public function tampilkanInfo(){
            return "Kode: {$this->kodeProduk}, Nama: {$this->namaProduk}, Harga: {$this->harga}";
        }
    }

    class Elektronik extends Produk {
            private $garansi;

            public function __construct($kodeProduk, $namaProduk, $harga, $garansi) {
                parent:: __construct($kodeProduk, $namaProduk, $harga); 
                    $this->garansi = $garansi;
            }

            public function getGaransi(){
                return $this->$garansi;
            }

            public function setGaransi(){
                $this->garansi = $garansi;
            }

            public function tampilkanInfo(){
                return parent::tampilkanInfo()."Garansi: {$this->garansi} tahun";
            }
        }

    class Handphone extends Elektronik {
        private $merk;

        public function __construct($kodeProduk, $namaProduk, $harga, $garansi, $merk) {
            $this->merk = $merk;
        }

        public function getMerk(){
            return $this->$merk;
        }

        public function setMerk(){
            $this->merk = $merk;
        }

        public function tampilkanInfo(){
            return parent::tampilkanInfo()."Merk: {$this->merk}";
        }
    }    

    $Elektronik = new produk ("E01", "mesincuci", 2000000, 3);
    $Handphone = new produk ("H01", "smartphone", 7299000, 1, "iQoo");
    $Elektronik2 = new produk ("E02", "kipasangin", 250000, 1);
    $Handphone2 = new produk ("H02", "smartphone", 17000000, 1, "IPhone");


    echo $Elektronik->tampilkanInfo();
    echo "<br>";
    echo $Handphone->tampilkanInfo();
    echo "<br>";
    echo $Handphone2->tampilkanInfo();
    echo "<br>";
    echo $Elektronik2->tampilkanInfo();
    ?>