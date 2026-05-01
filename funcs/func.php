<?php
function toupper($string)
{

return strtoupper($string);
}
function xss($string)
{
	return htmlspecialchars($string);
}
function captcha()
{
	$str="0123456789abcdefghijklmnopqrstuvwxyz";
	$len=strlen($str)-1;
	$result="";
	for($i=0;$i<=4;$i++)
	{
		$rand=rand(0,$len);
		$result.=substr($str,$rand,1);
	}
	return $result;
	
}

?>