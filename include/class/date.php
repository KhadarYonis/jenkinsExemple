<?php
	class Date
	{
		public static function getdate($date, $format = 'fr_FR')
		{
			$date = null;

			switch( $format )
			{
				case 'fr_FR' :
					$date = ( new DateTime($date) )->format('d/m/Y');
					break;

				default : 
					$date = ( new DateTime($date) )->format('Y-m-d');
					break;
			}

			return $date;
		}
	}
?>