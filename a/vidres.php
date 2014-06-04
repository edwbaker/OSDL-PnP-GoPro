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
  case '4k':
    $gopro->action('4K#12');
    break;
  case '2.7k':
    $gopro->action('2.7K#24');
    break;
  case '960':
    $gopro->action('960#48');
    break;
}
