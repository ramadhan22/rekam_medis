<?php 
	mysql_connect('localhost','root', '') or die('gagal konek');
	mysql_select_db('db_rekam_medis') or die('database salah');
	date_default_timezone_set('asia/makassar');
	session_start();
 ?>