<?php

echo $d = "23-4-2015";

$dd = date_create_from_format('j-m-Y',$d);

echo date_format($dd,'Y-m-d');

?>