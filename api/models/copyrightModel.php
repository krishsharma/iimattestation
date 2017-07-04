<?php

require_once($_SESSION['basepath'] . 'config/constants.php');
require_once($_SESSION['basepath'] . 'config/db.php');

class copyrightModel extends db_connection {

    private $link = null;

    public function __construct() {
        $db = new db_connection();
        $this->link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $this->link);
    }

    protected function getData() {
        $query = "SELECT * FROM " . TABLE_FOOTER_COPYRIGHT;
        $result = mysql_query($query, $this->link);
        if (mysql_num_rows($result) > 0) {
            $data = mysql_fetch_array($result);
        } else {
            $data = [];
        }
        return $data;
    }

    protected function saveData($copyright) {
        $findQuery = "SELECT * FROM " . TABLE_FOOTER_COPYRIGHT;
        $result = mysql_query($findQuery, $this->link);
        if (mysql_num_rows($result) > 0) {
            $query = "UPDATE " . TABLE_FOOTER_COPYRIGHT
                    . " SET `copyright`='{$copyright}'";
        } else {
            $query = "INSERT INTO " . TABLE_FOOTER_COPYRIGHT
                    . " (copyright) VALUES('{$copyright}')";
        }

        $status = mysql_query($query, $this->link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
