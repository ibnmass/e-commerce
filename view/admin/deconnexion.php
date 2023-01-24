<?php
require('../../controller/Session.php');
$sess=new Session();
$sess->FermerSession();
header('location:index.php');
?>