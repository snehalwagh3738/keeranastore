<?php
$con=mysql_connect('localhost','root','');
	$db=mysql_select_db('kreena_db',$con);
	if(!$db)
	{
		echo 'connection faild';
	}
        ?>