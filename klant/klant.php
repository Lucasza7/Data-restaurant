<?php
include '../db.php';
include '../header.php';

class klant {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function addKlant($naam, $email, $password)
    {
        return $this->dbh->execute("INSERT INTO klant (naam, email, password)
        VALUES (?,?,?)", 
        [$naam, $email, $password]);
    }

    public function selectAllKlant(){
        return $this->dbh->execute("SELECT * FROM klant");
    }
    public function selectOneKlant($id){
        return $this->dbh->execute("SELECT * FROM klant WHERE klantID =?", [$id]);
    }
}
?>