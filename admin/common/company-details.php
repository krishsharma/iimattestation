<?php
require_once '../header.php';
require_once '../navbar.php';
require_once '../classes/companyClass.php';
/**
 * Call company class to load details
 */
$company = new companyClass();
$result = $company->getCompanyDetails();
if (count($result) > 0) {
    $companyName = $result['name'];
    $companyWebsite = $result['website'];
    $companyLogoPath = $result['logo'];
}
?>
<div class="container">
    <nav class="nav-breadcrumb">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Common Section</a>
                <a href="<?php echo $_SESSION['baseurl']; ?>common/company-title.php" class="breadcrumb">Company Details</a>
            </div>
        </div>
    </nav>
    <form class="col s12 card-panel" action="../processdata.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s12">
                <input id="company-name" type="text" class="validate" name="company-name" value="<?php echo $result['name']; ?>" required>
                <label for="company-name">Enter Company Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="company-website" type="text" class="validate" name="company-website" value="<?php echo $result['website']; ?>" required>
                <label for="company-website">Enter Company Website (eg: www.example.com)</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn">
                    <span>Select Company Logo</span>
                    <input type="file" name="company-logo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <?php if ($result['logo'] != NULL && file_exists($_SERVER['DOCUMENT_ROOT'] . "/iimattestation/images/" . $result['logo'])) { ?>
                <img class="materialboxed img-border col s4" width="400" src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] ?>/iimattestation/images/<?php echo $result['logo']; ?>">
            <?php } ?>
        </div>
        <div class="row center">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="company-details">Save
                    <i class="material-icons left">save</i>
                </button>
            </div>
        </div>
    </form>
</div>
<?php require_once '../footer.php'; ?>