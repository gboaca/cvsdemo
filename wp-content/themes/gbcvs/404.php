<?php
/********************************
REDIRECT 404 TO HOMEPAGE
*********************************/
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();
?>