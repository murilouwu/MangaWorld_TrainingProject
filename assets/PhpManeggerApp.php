<?php
	$PaletsOfWebSite = array(
		array('#F299A0', '#024059', '#037F8C', '#F2B885', '#F2F2F2'),//comum
		array('#F2EFBD','#F28241','#F23E16', '#F22D1B', '#0D0D0D'),//Terror
		array('#BF0426', '#A6032F', '#590219', '#BBB0BF', '#1A2601'),//natal
		"SetColors"=> array('--none: rgba(0 0 0 / 0%);')
	);
	
	function HeaderEcho($Title, $assets, $itemPlus) {
		$res = '
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="google-signin-client_id" content="986510640429-40dehe8e9gg1eddmegab8pcouosskh0m.apps.googleusercontent.com">
		';
		if (isset($assets[0]) && is_array($assets[0])) {
			foreach ($assets[0] as $cssLink) {
				$res .= '<link rel="stylesheet" type="text/css" href="' . $cssLink . '"';
				if (isset($itemPlus[0]) && is_array($itemPlus[0]) && $itemPlus[0][0] == 0) {
					$res .= ' ' . $itemPlus[0][2];
				}
				$res .= '>';
			}
		}
		if (isset($assets[1]) && is_array($assets[1])) {
			foreach ($assets[1] as $jsLink) {
				$res .= '<script src="' . $jsLink . '"';
				if (isset($itemPlus[1]) && is_array($itemPlus[1]) && $itemPlus[1][0] == 0) {
					$res .= ' ' . $itemPlus[1][2];
				}
				$res .= '></script>';
			}
		}
	
		$res .= '
				<link rel="shortcut icon" href="'.$assets[2].'">
				<title>'.$Title.'</title>
			</head>
		';
		echo($res);
	}
	
	function footEcho(){
		$res = '
			</html>
		';
		echo($res);
	}
?>