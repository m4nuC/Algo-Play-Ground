<?php

class UF {
	
	private $objects = array();

	public function __construct( $N )
	{
		// We store the Number as Index not as Value so that we can easily access them
		for ($i = 0; $i < $N; $i++ )
		{
			$this->objects[$i] = $i;
		}

		$this->dpo();
	}

	public function union($a, $b) 
	{
		$this->dpo();

		// If this objects have the same value them they are connected we can return 
		if ($objects[$a] == $objects[$b]) return;

		$groupId = $objects[$a];
		$objects[$b] = $groupId;

		$this->dpo();
	}

	public function connected($a, $b)
	{
		//
	}

	private function dpo()
	{
		var_dump($his->objects);
	}

}


$UF = new UF(10)
