<?php
if(!function_exists('mb_ucwords')) {
	function mb_ucwords($str) {
		$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
		return ($str);
	}
}
 
$text = 'наверняка, вам удалось без особых трудностей прочитать все';
echo mb_ucwords($text);
?>