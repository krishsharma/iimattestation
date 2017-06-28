<?php

require_once($_SESSION['basepath'] . 'config/constants.php');
require_once($_SESSION['basepath'] . 'config/db.php');

class companyModel extends db_connection {

    protected function getData() {
        $db = new db_connection();
        $link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $link);
        $query = "SELECT * FROM " . TABLE_COMPANY;
        $result = mysql_query($query, $link);
        if (mysql_num_rows($result) > 0) {
            $data = mysql_fetch_array($result);
        } else {
            $data = [];
        }
        return $data;
    }

    protected function saveData($name, $website, $logoPath) {
        $db = new db_connection();
        $link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $link);
        $findQuery = "SELECT * FROM " . TABLE_COMPANY;
        $result = mysql_query($findQuery, $link);
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

        $status = mysql_query($query, $link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
