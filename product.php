<?php
class Product {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function getAllProducts() {
        $query = "SELECT products.*, categories.category_name
                  FROM products
                  JOIN categories ON products.category_id = categories.category_id";
        $result = mysqli_query($this->koneksi, $query);

        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }

        return $products;
    }

    // Tambahkan metode lain sesuai kebutuhan (tambah, edit, hapus)
}
?>
