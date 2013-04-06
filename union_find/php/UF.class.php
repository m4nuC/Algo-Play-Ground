<?php

class UF {
	
	private $objects = array();

	public function __construct( $N )
	{
		// We store the Number as Index not as Value so that we can easily access them
		for ($i = 1; $i <= $N; $i++ )
		{
			$this->objects[$i] = $i;
		}

		$this->dpo();
	}

	public function union($a, $b) 
	{
		$this->dpo();

		// If this objects have the same value them they are connected we can return 
		if ($this->objects[$a] == $this->objects[$b]) return;

		// Get the Group Id of the first object
		$groupId = $this->objects[$a];

		// Check if the second object is part of a group	
		$siblings = $this->siblings($b);

		if ($siblings)
		{
			foreach ( $siblings as $obj => $value )
			{
				$this->objects[$value] = $groupId;
			}
		}
		
		$this->dpo();
	}

	public function siblings($obj) 
	{
		// Get the group ID
		$groupId = $this->objects[$obj];

		// Search the array
		$results = array_keys($this->objects, $groupId, FALSE);
		return $results;
	}

	public function connected($a, $b)
	{
		// 
	}

	private function dpo()
	{
		print("\n");
		var_dump($this->objects);
	}

}


$UF = new UF(10);
$UF->union(1,2);
$UF->union(5,2);
$UF->union(6,2);
$UF->union(2,3);
$UF->union(10,6);


