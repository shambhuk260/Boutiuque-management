<?php


$d = date("Y-m-j",IST);

$dd = date_create();

echo date_timestamp_get($dd);

echo date_offset_get();

echo gmdate();

echo localtime(true);

echo timezone_abbreviations_list("IST");

?>