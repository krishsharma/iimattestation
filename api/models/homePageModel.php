<?php

require_once($_SESSION['basepath'] . 'config/constants.php');
require_once($_SESSION['basepath'] . 'config/db.php');

class homePageModel extends db_connection {

    private $link = null;

    public function __construct() {
        $db = new db_connection();
        $this->link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $this->link);
    }

    protected function save($data) {
        $query = "INSERT INTO " . TABLE_HOME_SECTION_1
                . " (title) VALUES('{$data->title}')";

        $status = mysql_query($query, $this->link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    protected function findAll() {
        $query = "SELECT * FROM " . TABLE_HOME_SECTION_1;
        $result = mysql_query($query, $this->link);
        if (mysql_num_rows($result) > 0) {
            $index = 0;
            while ($row = mysql_fetch_array($result)) {
                $data['id'][$index] = $row['id'];
                $data['title'][$index] = $row['title'];

                ++$index;
            }
        } else {
            $data = [];
        }
        return $data;
    }

    protected function findOne($id) {
        $query = "SELECT * FROM " . TABLE_HOME_SECTION_1
                . " WHERE `id`={$id}";
        $result = mysql_query($query, $this->link);
        if (mysql_num_rows($result) > 0) {
            $data = mysql_fetch_array($result);
        } else {
            $data = [];
        }
        return $data;
    }

    protected function updateOne($data) {
        $query = "UPDATE " . TABLE_HOME_SECTION_1
                . " SET `title`='{$data->title}' WHERE `id`={$data->id}";

        $status = mysql_query($query, $this->link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    protected function deleteOne($id) {
        $query = "DELETE FROM " . TABLE_HOME_SECTION_1
                . " WHERE `id`={$id}";

        $status = mysql_query($query, $this->link);
        if ($status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
