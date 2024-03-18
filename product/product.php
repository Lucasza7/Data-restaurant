<?php
include '../db.php';

class product {
    private $dbh;
    private $table = "product";

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function insertProduct(String $naam, String $omschrijving, int $prijs)
    {
        return $this->dbh->execute("INSERT INTO $this->table
        VALUES (null,?,?,?)", [$naam, $omschrijving, $prijs]);
    }
    public function selectAllProduct(){
        return $this->dbh->execute("SELECT * FROM product");
    }
    public function selectOneProduct($id){
        return $this->dbh->execute("SELECT * FROM product WHERE product_id =?", [$id]);
    }
}
?>