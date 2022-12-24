<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 11</title>
    <style>
    h1{
        font-size: 14px;
    }
    </style>
</head>
<body>
    <h1>Menghitung Luas Persegi</h1>
    <?php
        // menghitung luas persegi panjang
        class persegiPanjang{
            public $panjang;
            public $lebar;

            public function luasP(){
                $luas =$this->panjang*$this->lebar;
                return $luas;
            }
            public function kelilingP(){
                $LuasK =2*($this->panjang+$this->lebar);
                return $LuasK;
            }
            public function setPanjang($panjang){
                return $this->panjang=$panjang;
            }
            public function setLebar($lebar){
                return $this->lebar=$lebar;
            }
        }
        $luaspersegi=new persegiPanjang();
        echo "panjang :".$luaspersegi->setPanjang(20);
        echo "<br>";
        echo "lebar :".$luaspersegi->setLebar(10);
        echo "<br>";
        echo "maka luas persegi panjang =".$luaspersegi->luasP();
        echo "<br>";
        echo "maka luas keliling persegi panjang =".$luaspersegi->kelilingP();
        echo "<br>";
        echo "======================";
        echo "<br>";
    ?>
    <h1>Menghitung Luas Segitiga</h1>
    <?php
        // menghitung Luas segitiga
        class segitiga{
            public $tinggi;
            public $alas;

            public function luasSegitiga(){
                $luasS =1/2*($this->tinggi+$this->alas);
                return $luasS;
            }
            public function settinggi($tinggi){
                return $this->tinggi=$tinggi;
            }
            public function setalas($alas){
                return $this->alas=$alas;
            }
        }

        $luassegitiga=new segitiga();
        echo "tinggi :".$luassegitiga->settinggi(20);
        echo "<br>";
        echo "alas :".$luassegitiga->setalas(10);
        echo "<br>";
        echo "maka luas segitiga =".$luassegitiga->luasSegitiga();
    ?>
</body>
</html>


