<?php

require_once('/opt/kwynn/kwutils.php');

$rawin = isrv('tokenId'); kwas($rawin && is_numeric($rawin), 'bad input 10');
$tid = intval($rawin); kwas($tid >= 1, 'bad input 20');


$a = [];
$a['name'] = 'test token local name ' . $tid;
$a['description'] = 'test  token local 1 descr ' . $tid;

$u  = '';
$u = 'https://';
$u .= $_SERVER['HTTP_HOST'];
$u .= '/t/22/04/eth/mds/';
$u .= $tid;
$u .= '.png';

$a['image'] = $u;

kwjae($a);
