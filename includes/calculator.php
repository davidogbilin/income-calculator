<?php

class Calculator
{
	

	//tithe percentage for the monthly salary
	public function tithe($name, $amount, $month)
	{

		echo "Your name is: ". $name. " <br>";
		echo "Your tithe amount is: "."<strong>". $amount * (10/100)."</strong> <br>";
		echo "The month is: ". "<strong>". $month. " <strong> <br> <br>";
	}


	//transport percentage for the monthly salary
	public function transport($name, $amount, $month)
	{
		echo "Your name is: ". $name. "<br>";
		echo "Your transport for the month is: ". "<strong>". $amount * (10/100)."</strong><br>";
		echo "The month is: ". "<strong>". $month. " <strong> <br> <br>";
	}


	//upkeep percentage for the monthly salary
	public function upkeep($name, $amount, $month)
	{
		echo "Your name is: ". $name. " <br>";
		echo "Your upkeep for the month is: ". "<strong>". $amount * (15/100)."</strong><br>";
		echo "The month is: ". "<strong>". $month. " <strong> <br> <br>";
	}


	public function foodstuff($name, $amount, $month)
	{
		echo "Your name is: ". $name. " <br>";
		echo "Your foodstuff expenditure for the month is: ". "<strong>". $amount * (20/100)."</strong><br>";
		echo "The month is: ". "<strong>". $month. " <strong> <br> <br>";
	}

}


?>