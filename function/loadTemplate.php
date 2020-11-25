<?php
	function loadTemplate($file,$temp){
		extract($temp);
		ob_start();
		require $file;
		$section = ob_get_clean();
		return $section;
	}

