<?php
include '../db.php';

class tafel {
    private $dbh;
    private $table = "tafel";

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function inserttafel(String $tafelnr, String $bijzonderheden, int $personen)
    {
        return $this->dbh->execute("INSERT INTO $this->table
        VALUES (null,?,?,?)", [$tafelnr, $bijzonderheden, $personen]);
    }
    public function selectAlltafel(){
        return $this->dbh->execute("SELECT * FROM tafel");
    }
    public function selectOnetafel($id){
        return $this->dbh->execute("SELECT * FROM tafel WHERE tafelnr =?", [$id]);
    }
}
?>