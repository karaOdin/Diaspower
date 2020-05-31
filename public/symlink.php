<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/Diaspower/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/Diaspower/public/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';

?>