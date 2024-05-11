<?php
session_start();
session_destroy();

header ("Location: ../adminlog/adminindex.php");
?>