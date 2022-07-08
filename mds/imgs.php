<?php

require_once('/opt/kwynn/kwutils.php');

$rawin = isrv('tokenId'); kwas($rawin && is_numeric($rawin), 'bad input 10');
$tid = intval($rawin); kwas($tid >= 1, 'bad input 20');

// $png = file_get_contents(__DIR__ . '/../../../../../../../nft/md/images/' . $tid . '.png');
$png = file_get_contents(__DIR__ . '/' . $tid . '.png');

$len = strlen($png);

header('content-type: image/png');
header('content-length: ' . $len);
echo($png);
exit(0);
