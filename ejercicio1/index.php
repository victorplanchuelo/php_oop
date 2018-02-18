<?php

class Team
{

	public $name;
	public $pet;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function setPet($pet)
	{
		$this->pet = $pet;
	}

	public function salute()
	{
		echo "Go {$this->name}!!! Your pet, the {$this->pet} salutes you.";
	}
}

$team1 = new Team("Valencia");
$team1->setPet("Bat");
$team1->salute();

echo "<br/>";

$team2 = new Team("Atletico");
$team2->setPet("Indy");
$team2->salute();