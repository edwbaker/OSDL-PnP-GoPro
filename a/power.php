<?php

/*

OSDL wrapper for GoProPHP
=========================
GoProPHP: https://github.com/edwbaker/GoProPHP
OSDL:     http://osdl.myspecies.info
Author:   http://ebaker.me.uk

*/


global $_GET;

if (!isset($_GET)) {
  exit;
}

require_once('../goproinc.php');
require_once('../settings.php');

$gopro = new GoPro($pw);

switch ($_GET['val']) {
  case 'on':
    $gopro->action('TURNON');
    break;
  case 'off':
    $gopro->action('TURNOFF');
    break;
}
