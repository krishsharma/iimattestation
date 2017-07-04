<?php

require_once($_SESSION['basepath'] . 'models/companyModel.php');

class companyClass extends companyModel {

    public function getCompanyDetails() {
        $dbModel = new companyModel();
        return $dbModel->getData();
    }

    public function saveCompanyDetails($name, $website) {
        $dbModel = new companyModel();
        return $dbModel->saveData($name, $website);
    }

    public function imageUpload($file) {
        $validextensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $file["name"]);
        $file_extension = end($temporary);
        if ((($file["type"] == "image/png") || ($file["type"] == "image/jpg") || ($file["type"] == "image/jpeg")
                ) && ($file["size"] < 1100000)//Approx. 1 MB can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if ($file["error"] > 0) {
                $_SESSION['status'] = FALSE;
                $_SESSION['message'] = "Return Code: " . $file["error"];
                return FALSE;
            } else {
                $sourcePath = $file['tmp_name'];
                $targetPath = $_SERVER['DOCUMENT_ROOT'] . "/iimattestation/images/" . $file['name'];
                if (move_uploaded_file($sourcePath, $targetPath)) {
                    return TRUE;
                } else {
                    $_SESSION['status'] = FALSE;
                    $_SESSION['message'] = "Unable to upload image";
                    return FALSE;
                }
            }
        } else {
            $_SESSION['status'] = FALSE;
            $_SESSION['message'] = "Invalid file size or type!";
            return FALSE;
        }
    }

}
