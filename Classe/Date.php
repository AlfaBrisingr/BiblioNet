<?php
class Date
{
	static public function formaterDate($dateCom)
	{
		$Year = substr($dateCom, 0, -6);
		$Month = substr($dateCom, 5, -3);
		$Day = substr($dateCom, 8);
		$dateCom = $Day.'/'.$Month.'/'.$Year;
		return $dateCom;
	}
}