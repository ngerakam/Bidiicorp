<?php
session_start();
session_unset('username');
session_destroy();
header("location: login.html");
?>