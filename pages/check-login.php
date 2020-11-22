<?php
$pos = strpos($_SERVER['REQUEST_URI'], "admin");

if ($_COOKIE["login"] == "netjang") {
} else if ($pos) {
    echo "<script>window.location = 'http://" . $_SERVER['SERVER_NAME'] . "/DDD'</script>";
}
