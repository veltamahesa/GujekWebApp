<?php
if(!mysql_connect("localhost","admin","rahasia"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("gujek"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>