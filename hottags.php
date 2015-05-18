<?php

/*function charset($code='utf-8'){
	echo '<meta http-equiv="Content-Type" content="text/html; charset='.$code.'" />';
}

function js($code) {
	echo '<script type="text/javascript" src="'.$code.'"></script>';		
}

function css($file) {
	echo '<link rel="stylesheet" href="'.$file.'" type="text/css">';
}

function icon($file) {
	echo '<link rel="icon" type="image/png" href="'.$file.'" />';
}

function feed($file) {
	echo '<link title="argumenti_ru" type="application/rss+xml" rel="alternate" href="'.$file.'"/>';
}*/

function title($var = ''){
	
	static $title ='';
	
	if ($var == '')
		return '<title>'.$title.'</title>';
	else
		$title = $var;

}	

/*function discript($var) {

}

function keywords($keys) {

}

function a($link, $title) {
	echo '<a href="'.$link.'">'.$title.'</a>';
}

function li_a($title, $link) {
	echo '<li><a href="'.$link.'">'.$title.'</a></li>';
}

function jquery($ver) {
	echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/'.$ver.'/jquery.min.js"></script>';
}

function banner($img, $link, $alt = '') {
	echo '<a href="'.$link.'" target="_blank"><img src="'.$img.'" alt="'.$alt.'"></a>';
} */