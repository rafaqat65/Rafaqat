<?php 
include_once("fckeditor/fckeditor.php") ;
$oFCKeditor = new FCKeditor('coverletter');
$oFCKeditor->BasePath = 'fckeditor/' ;
$oFCKeditor->Value = 'kddkdkkddkk';
$oFCKeditor->ToolbarSet = 'MyToolbar';
$oFCKeditor->Width = '625' ;
$oFCKeditor->Height = '360' ;
$oFCKeditor->Create();
?>