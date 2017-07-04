<?php

require_once($_SESSION['basepath'] . 'config/constants.php');
require_once($_SESSION['basepath'] . 'config/db.php');

class userModel extends db_connection {

    protected function getUser($userName, $password) {
        $dataArray = array();
        $db = new db_connection();
        $link = $db->createConnection();
        mysql_selectdb(_DBNAME_, $link);
        $query = "SELECT * FROM " . TABLE_AUTH . " WHERE username='{$userName}' AND password='{$password}'";
        $result = mysql_query($query, $link);
        if (mysql_num_rows($result) > 0) {
            while ($data = mysql_fetch_array($result)) {
                $dataArray['fullname'] = $data['fullname'];
            }
        } else {
            $dataArray['userNotFoundInDB'] = TRUE;
        }
        return $dataArray;
    }

}
