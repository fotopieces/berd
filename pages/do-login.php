<?php
$cookie_name = "visited";
if ("jang" == $_POST['user'] && "netjang" == $_POST['pass']) {
    setcookie("login", "netjang", time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Y";
}
