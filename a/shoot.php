<?php

/*

OSDL wrapper for GoProPHP
=========================
GoProPHP: https://github.com/edwbaker/GoProPHP
OSDL:     http://osdl.myspecies.info
Author:   http://ebaker.me.uk

*/


global $_GET;

if (!isset($_GET['val'])) {
  $_GET['val'] = '';
}

require_once('../goproinc.php');
require_once('../settings.php');

$gopro = new GoPro($pw);

switch ($_GET['val']) {
  case '':
    $gopro->action('SHOOT');
    break;
  case 'start':
    $gopro->action('START');
    break;
  case 'stop':
    $gopro->action('STOP');
    break;
}
