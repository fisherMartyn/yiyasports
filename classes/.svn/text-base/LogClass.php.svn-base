<?php
class LogClass
{
	var $file_t;
	function LogClass()
	{
		$this->file_t = fopen("/log/systemLog",'a+') or exit("Unable to open file!");
	}
	function LogWrite($s)
	{
		$t = date('y-m-d H:i:s');
		$s=$t."----".$s."\n";
		fwrite($this->file_t,$s);
		
	}
	function LogClose()
	{
		fclose($this->file_t);
	}
}
?>
