<?php require_once '../header.php'; ?>
<!-- Dropdown Structure -->
<?php require_once '../navbar.php'; ?>
<div class="container">
    <nav class="nav-breadcrumb">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Common Section</a>
                <a href="<?php echo $_SESSION['baseurl']; ?>common/company-logo.php" class="breadcrumb">Company Logo</a>
            </div>
        </div>
    </nav>
    <form class="col s12 card-panel" action="validate.php" method="post" autocomplete="off">
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="row center">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Save
                    <i class="material-icons left">save</i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 auth-error">
                <?php
                if (isset($_SESSION['authenticate_error'])) {
                    echo $_SESSION['authenticate_error'];
                    session_destroy();
                }
                ?>
            </div>
        </div>
    </form>
</div>
<?php require_once '../footer.php'; ?>