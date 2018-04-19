<?php 
	class User
	{
		public $age;
		public function __construct($age)
		{
			$this->age = $age;
			$this->password = 'CarlJoseph';
		}

		public function getPassword($hint)
		{
			if($hint == 'true')
			{
				return $this->password;
			}
			else
			{
				return 'Sorry credentials is incorrect';
			}
		}
	}

	// $brad = new User(31);

	// echo $brad->age;

	echo $brad -> getPassword('er');
?>