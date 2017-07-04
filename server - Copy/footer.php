<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo $_SESSION['baseurl']; ?>assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_SESSION['baseurl']; ?>assets/js/materialize.min.js"></script>
<?php if (isset($_SESSION['status'])) { ?>
    <script>
        $(function () {
            $('.popup').show();
            setTimeout(function () {
                $('.popup').hide();
            }, 3000);
        });
    </script>
    <?php
    unset($_SESSION['status']);
    unset($_SESSION['message']);
}
?>
</body>
</html>