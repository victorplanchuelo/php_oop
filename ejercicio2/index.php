<?php

class Person {
	protected $firstName;
	protected $lastName;
	protected $nickname;
	protected $changeNickname = 0;
	protected $birthdate;

	public function __construct($firstName, $lastName, $birthdate)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthdate = DateTime::createFromFormat('d/m/Y',$birthdate);
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getBirthdate()
	{
		return $this->birthdate;
	}

	public function getAge()
	{
		/*	
		  //date in mm/dd/yyyy format; or it can be in other formats as well
		  $birthDate = "12/17/1983";
		  //explode the date to get month, day and year
		  $birthDate = explode("/", $birthDate);
		  //get age from date or birthdate
		  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
		    ? ((date("Y") - $birthDate[2]) - 1)
		    : (date("Y") - $birthDate[2]));
		  echo "Age is:" . $age;
		*/
			$now = new DateTime(); 
		 	return $now->diff($this->birthdate)->format("%y years");
	}

	public function setNickname($nickname)
	{
		if($this->changeNickname >= 2)
		{
			throw new Exception("You can't change a nickname more than 2 times");
		}

		if(strlen($nickname)<2)
		{
			throw new Exception("Nickname must have at least 2 characters");	
		}

		if($nickname==$this->firstName || $nickname==$this->lastName)
		{
			throw new Exception("Your nickname has to be different than your First Name and your Last Name");
		}


		$this->nickname = $nickname;
		$this->changeNickname++;
	}

	public function getNickname()
	{
		return $this->nickname;
	}
}

$person = new Person('Victor', 'Planchuelo', '24/07/1982');

echo $person->getAge();
$person->setNickName('Planchu');
//$person->setNickname('Vic');
//$person->setNickname('Victor');

//exit($person->getNickname());

echo $person->getNickname();