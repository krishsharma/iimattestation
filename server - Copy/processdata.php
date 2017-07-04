<?php

session_start();
/**
 * Below function is to save company details
 */
if (isset($_POST['company-details'])) {

    require_once './classes/companyClass.php';
    require_once('./config/db.php');

    $db = new db_connection();
    $link = $db->createConnection();

    //Get company details from company page
    $companyName = mysql_real_escape_string($_POST['company-name'], $link);
    $companyWebsite = mysql_real_escape_string($_POST['company-website'], $link);
    $companyLogoPath = mysql_real_escape_string($_FILES['company-logo']['name'], $link);

    //Call Company class to save details
    $company = new companyClass();
    $imageStatus = TRUE;
    if ($companyLogoPath != NULL) {
        $imageStatus = $company->imageUpload($_FILES['company-logo']);
    }
    if ($imageStatus == TRUE) {
        $dataStatus = $company->saveCompanyDetails($companyName, $companyWebsite, $companyLogoPath);
        if ($dataStatus == TRUE) {
            $_SESSION['status'] = TRUE;
            $_SESSION['message'] = 'Data saved';
        } else {
            $_SESSION['status'] = FALSE;
            $_SESSION['message'] = 'Error in saving data!';
        }
    }

    header('Location: common/company-details.php');
}