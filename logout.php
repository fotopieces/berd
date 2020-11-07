<?php

setcookie("login", "", time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<script>
    window.location.href = "index.php";
</script>