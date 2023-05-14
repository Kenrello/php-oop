<?php
class Produk {
    public $nama;
    public $price;
    public $discount = 10;

    public function __construct($nama, $price) {
        $this->nama = $nama;
        $this->price = $price;
    }

    public function getHargaSetelahDiskon() {
        return $this->price - ($this->price * $this->discount / 100);
    }
}

class CDmusic extends Produk {
    public function getCDmusicInfo() {
        return "Nama CD: $this->nama | Harga: $this->price | Diskon: $this->discount% | Harga Setelah Diskon: " . $this->getHargaSetelahDiskon();
    }
}

class CDrak extends Produk {
    public function getCDrakInfo() {
        return "Nama CD: $this->nama | Harga: $this->price | Diskon: $this->discount% | Harga Setelah Diskon: " . $this->getHargaSetelahDiskon();
    }
}

// Contoh penggunaan
$cd1 = new CDmusic("Album Musik 1", 100000);
echo $cd1->getCDmusicInfo() . "\n"; // Output: Nama CD: Album Musik 1 | Harga: 100000 | Diskon: 10% | Harga Setelah Diskon: 90000

$cd2 = new CDrak("Album Rak 1", 50000);
echo $cd2->getCDrakInfo() . "\n"; // Output: Nama CD: Album Rak 1 | Harga: 50000 | Diskon: 10% | Harga Setelah Diskon: 45000
?>