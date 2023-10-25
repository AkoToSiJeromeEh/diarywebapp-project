<?php 
//destroy sessions
session_start();
session_unset();
session_destroy();
header('Location: ../../../../TwoHeartsMemoir/');
exit;
?>