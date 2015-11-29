<?php
$a=$_POST["t"];
$cookie_name = "user";
$cookie_value = $a;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>


</body>
</html>