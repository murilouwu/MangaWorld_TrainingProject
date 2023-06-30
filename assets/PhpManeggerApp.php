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
		';
	
		if (is_array($assets)) {
			foreach ($assets as $asset) {
				$type = $asset[0];
				$link = $asset[1];
				$extra = isset($asset[2]) ? $asset[2] : null;
	
				if ($type == 0) {
					$res .= '<meta ' . $link . '>';
				} elseif ($type == 1) {
					$res .= '<link rel="stylesheet" type="text/css" href="' . $link . '"';
					if ($extra !== null) {
						$res .= ' ' . $extra;
					}
					$res .= '>';
				} elseif ($type == 2) {
					$res .= '<script src="' . $link . '"';
					if ($extra !== null) {
						$res .= ' ' . $extra;
					}
					$res .= '></script>';
				}
			}
		}
	
		$res .= '
				<link rel="shortcut icon" href="'.$itemPlus.'">
				<title>'.$Title.'</title>
			</head>
		';
	
		echo $res;
	}
	
	function footEcho(){
		$res = '
			</html>
		';
		echo($res);
	}
	function mensage($txt){
	    echo '<script>alert("'.$txt.'");</script>';
	}

?>
