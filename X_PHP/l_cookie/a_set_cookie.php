<!-- Syntax:
------
setcookie(name, value, expire, path, domain, secure, httponly);

name : Cookie name (required)
value : Cookie value (required) -->


<?php
    // set a cookie named "user" with a value "Ram Thapa" that expires in 30 days
    setcookie("user","Ram Thapa",time() + (86400 * 30),"/"); // 86400 = 1 day
?>