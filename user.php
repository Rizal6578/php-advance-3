<?php
class User {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function register($name, $email, $phone, $password) {
        $username = $phone;
        $query = "INSERT INTO users (name, email, phone, username, password, group_id) VALUES ('$name', '$email', '$phone', '$username', '$password', 3)";
        mysqli_query($this->koneksi, $query);
    }
}
?>
