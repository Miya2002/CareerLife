<?php
session_start();
session_destroy();
header('location: /CareerLife/account/login');
?>