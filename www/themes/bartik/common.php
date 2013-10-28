<?php
function renderMenuItems($arr)
{
	$output = '';
	foreach($arr as $value)
	{
		$output .= 
		'<div class="row"><a href="/' . drupal_get_path_alias($value['href']) . '">' . $value['title'] . '</a></div>';
	}
	return $output;
}

function checkActive($section)
{
	if (strpos($_SERVER["REQUEST_URI"], $section) !== false) {
		return 'class="active"';
	}
}

function checkWhere($section)
{
	if (strpos($_SERVER["REQUEST_URI"], $section) !== false) {
		return '<span class="we_are_here">мы тут</span>';
	}
}


function getSection()
{
	$url = $_SERVER["REQUEST_URI"];
	if (strpos($_SERVER["REQUEST_URI"], '/stroitelstvo') !== false) {
		return '<div class="delimiter_right"></div><a href="' . '/stroitelstvo' . '"><span>Строительство</span></a>';
	} else if (strpos($_SERVER["REQUEST_URI"], '/arbolit') !== false) {
		return '<div class="delimiter_right"></div><a href="' . '/arbolit' . '"><span>Арболит</span></a>';
	} else if (strpos($_SERVER["REQUEST_URI"], '/okna') !== false) {
		return '<div class="delimiter_right"></div><a href="' . '/okna' . '"><span>Окна</span></a>';
	} else {
		return '';
	}
}

function getPage($title)
{
	if (substr_count($_SERVER["REQUEST_URI"], '/') > 1) 
	{
		return '<div class="delimiter_right"></div><span>' . $title . '</span>';
	} else {
		return '';
	}
}
?>