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
  case 'video':
    $gopro->action('VIDEO');
    break;
  case 'photo':
    $gopro->action('PHOTO');
    break;
  case 'burst':
    $gopro->action('BURST');
    break;
  case 'timelapse':
    $gopro->action('TLAPSE');
    break;
}
