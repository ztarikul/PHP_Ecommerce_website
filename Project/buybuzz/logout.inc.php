<?php

 require 'header.php';
?>
<?php
session_unset();
session_destroy();
header("locaion:index.php");
exit();
?>