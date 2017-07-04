<?php

require_once($_SESSION['basepath'] . 'config/constants.php');
require_once($_SESSION['basepath'] . 'config/db.php');

class footerGridModel extends db_connection {

    private $link = null;

    public function __construct() {
        $db = new db_connection();
        $this->link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $this->link);
    }

    protected function getData() {
        $query = "SELECT grid_label,GROUP_CONCAT(grid_description SEPARATOR '^') AS grid_description,"
                . " GROUP_CONCAT(grid_link SEPARATOR '^') AS grid_link,grid_col"
                . " FROM " . TABLE_FOOTER_GRID
                . " GROUP BY grid_col"
                . " ORDER BY grid_col";
        $result = mysql_query($query, $this->link);
        if (mysql_num_rows($result) > 0) {
            $index = 0;
            while ($row = mysql_fetch_array($result)) {
                $data['grid_label'][$index] = $row['grid_label'];
                $data['grid_description'][$index] = $row['grid_description'];
                $data['grid_link'][$index] = $row['grid_link'];
                $data['grid_col'][$index] = $row['grid_col'];

                ++$index;
            }
        } else {
            $data = [];
        }
        return $data;
    }

    protected function saveData($name, $website) {
        $findQuery = "SELECT * FROM " . TABLE_FOOTER_GRID;
        $result = mysql_query($findQuery, $this->link);
        if (mysql_num_rows($result) > 0) {
            $query = "UPDATE " . TABLE_FOOTER_GRID
                    . " SET `name`='{$name}',`website`='{$website}'";
        } else {
            $query = "INSERT INTO " . TABLE_FOOTER_GRID
                    . " (name, website)"
                    . " VALUES('{$name}','{$website}')";
        }

        $status = mysql_query($query, $this->link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
