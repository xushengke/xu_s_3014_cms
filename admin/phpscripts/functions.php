<?php

	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function multiReturns($value) {
		$addPassed = $value;
		$newResult = 7 + $addPassed;
		$newResult2 = $value * 12;
		return array($newResult, $newResult2);
		//echo $newResult;
	}

?>
