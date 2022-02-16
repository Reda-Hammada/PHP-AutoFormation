<?php

class Customer
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}



class VIP extends Customer
{
	public function getFormattedName()
	{
		return ucwords($this->name);
	}
}


$reda = new VIP('reda hammada');
echo $reda->getFormattedName();

?>