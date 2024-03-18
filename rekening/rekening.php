<?php
include 'db.php';

class rekening {
    private $dbh;
    private $table = "product";

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }

    
}
?>