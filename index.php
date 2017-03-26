<?php
if ( $_SERVER['REQUEST_URI'] == '/' ) $page = 'index';
else
{
	if (strpos($_SERVER['REQUEST_URI'],'?')>0) $page = substr($_SERVER['REQUEST_URI'],1,strpos($_SERVER['REQUEST_URI'],'?')-1);
	else $page = substr($_SERVER['REQUEST_URI'],1);
}
if (file_exists('page/'.$page.'.php')) include 'page/'.$page.'.php';
else exit('page 404');

function Head($title) 
{
	echo '<!DOCTYPE html>
		<html>
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>'.$title.'</title>
		<link rel="stylesheet" href="resource/style.css">
		</head>
		<body>
		<div class="content">

			<div class="menu">
				<a href="/"><div class="logo"><img src="/resource/img/path-1.png"></div></a>
				<div class="right_menu">
					<span class="menu_items"><img src="/resource/img/youtube.png"  width="16" height="11">СТРИМЫ</span>
					<span class="menu_items">MY LIFE</span>
					<img src="/resource/img/user.png"  width="9" height="11">
					<img src="/resource/img/search.png" width="9" height="11">
					
					
				</div>
			</div>
			';
}

function menu()
{
	$text ='<div class="menu">
				<a href="/"><img src="/resource/img/path-1.png"></a>
				<div class="right_menu">
				</div>
			</div>';
	echo $text;
}

function Footer () 
{
	echo '	
		</div>	
		</body>
		</html>
		<footer class="footer"></footer>';
}
?>