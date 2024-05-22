<?php
class Product
{
    private $conn;

    public function __construct()
    {
        include_once "dbconnect.php";
        $this->conn = dbconnect();

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateQuantity($productId, $quantity)
    {
        $sql = "UPDATE products SET quantity = quantity - $quantity WHERE id = $productId";
        return $this->conn->query($sql);
    }
}
