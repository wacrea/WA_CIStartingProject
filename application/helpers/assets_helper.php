<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		return base_url().'assets/css/' . $nom . '.less';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		return base_url().'assets/javascript/' . $nom . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		return base_url().'assets/images/' . $nom;
	}
}

if ( ! function_exists('lib_url'))
{
	function lib_url($folder, $file)
	{
		return base_url().'assets/lib/' . $folder . '/' . $file;
	}
}
