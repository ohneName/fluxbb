<?php
define('PUN_ROOT', dirname(__FILE__).'/');
require PUN_ROOT.'include/captcha/functions.php';

echo $_SESSION['captcha']->retournerCleSiTokenValide ();
