<?php
namespace BiblioNet\Classes;

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

	public static function formaterDateEtHeure($var)
	{
		$year = substr($var, 0, -15);
		$month = substr($var, 5, -12);
		$day = substr($var, 8, -9);
		$hour = substr($var, 10, -6);
		$min = substr($var, 14, -3);
		return $day.'/'.$month.'/'.$year.' à '.$hour.':'.$min;
	}

	public static function formaterFr($var)
	{
		$lesMois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Décembre'];
		$year = substr($var, 0, -15);
		$mois = substr($var, 5, -3);
		$day = substr($var, 8, -9);
		$hour = substr($var, 10, -6);
		$min = substr($var, 14, -3);
		if (substr($mois, 0, 1) === '0') {
			$mois = substr($mois, 1, 2);
		}
		return $day.' '.$lesMois[$mois - 1].' '.$year.' à '.$hour.':'.$min;
	}

	public static function formaterDateFr($dateCom){
		$lesMois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Décembre'];
		$Year = substr($dateCom, 0, -6);
		$Month = substr($dateCom, 5, -3);
		$Day = substr($dateCom, 8);
		if (substr($Month, 0, 1) === '0') {
			$Month = substr($Month, 1, 2);
		}
		return $Day.' '.$lesMois[$Month - 1].' '.$Year;
	}
}