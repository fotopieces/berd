<?php
if ($_COOKIE["login"] == "netjang") {
} else if ($_GET['page'] == "admin") {
?>
    <script>
        window.location.href = "index.php";
    </script>
<?php
}
