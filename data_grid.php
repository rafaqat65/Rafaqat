<?php
require_once("phpgrid/conf.php"); 

function createGrid()
{  
   $link = mysql_connect('localhost', 'root', '');
   mysql_select_db('test',$link);
	$dg = new C_DataGrid("SELECT * FROM content", "id", "content");
	
	$dg->display();
}
createGrid();
?>