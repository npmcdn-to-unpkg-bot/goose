<?php
header("content-type:text/html; charset=utf-8");
session_cache_expire(30);
session_start();

define('GOOSE', true);
define('PWD', dirname(__FILE__));

require_once(PWD.'/libs/checkInstall.php');
?>