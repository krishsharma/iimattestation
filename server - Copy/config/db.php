<?php

class db_connection {

    private $host = "localhost";
    private $user_name = "root";
    private $password = "";

    public function createConnection() {
        $link = mysql_connect($this->host, $this->user_name, $this->password) or die(mysql_error());
        return $link;
    }

}
