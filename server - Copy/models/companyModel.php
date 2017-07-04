<?php

require_once($_SESSION['basepath'] . 'config/constants.php');
require_once($_SESSION['basepath'] . 'config/db.php');

class companyModel extends db_connection {

    private $link = null;

    public function __construct() {
        $db = new db_connection();
        $this->link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $this->link);
    }

    protected function getData() {
        $query = "SELECT * FROM " . TABLE_COMPANY;
        $result = mysql_query($query, $this->link);
        if (mysql_num_rows($result) > 0) {
            $data = mysql_fetch_array($result);
        } else {
            $data = [];
        }
        return $data;
    }

    protected function saveData($name, $website) {
        $findQuery = "SELECT * FROM " . TABLE_COMPANY;
        $result = mysql_query($findQuery, $this->link);
        if (mysql_num_rows($result) > 0) {
            if ($logoPath != NULL) {
                $query = "UPDATE " . TABLE_COMPANY
                        . " SET `name`='{$name}',`website`='{$website}',`logo`='{$logoPath}'";
            } else {
                $query = "UPDATE " . TABLE_COMPANY
                        . " SET `name`='{$name}',`website`='{$website}'";
            }
        } else {
            $query = "INSERT INTO " . TABLE_COMPANY
                    . " (name, website, logo)"
                    . " VALUES('{$name}','{$website}','{$logoPath}')";
        }

        $status = mysql_query($query, $this->link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
