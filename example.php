<?php

require 'Instagram.class.php';

$insta = new Instagram();
$info = $insta->get('maribolro');
echo '<pre>';
print_r($info);
echo '<pre>';
