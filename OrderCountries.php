<?php 

class OrderCountries{

	private $codes = [];

	public function __construct( $codes = null)
	{
		if ($handle = fopen($codes,"r") ) 
		{
			while ($item = fgetcsv($handle)) {
				$this->codes[] = $item[7];
			}

			sort($this->codes);
		}

		fclose($handle);

		
	}

	public function getList()
	{
		foreach ($this->codes as $code) {
			$bish = strstr($code,'B');
			$nish = strstr($code,'N');

			if ($bish && $nish) {
				echo "BishNish";
			} else if ($bish) {
				echo "Bish";
			} else if ($nish) {
				echo "Nish";
			} else {
				echo $code;
			}
			echo "\n";
		}
	}

}


$a = new OrderCountries(dirname(__FILE__)."/list_of_countries.csv" );
$a->getList();

