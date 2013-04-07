<?php

class UF {
	
	private $groupIds = array();

/**
 * Construct
 * @param [type] $N [description]
 */
	public function __construct( $N )
	{
		// We store the Number as Index not as Value so that we can easily access them
		for ($i = 0; $i < $N; $i++ )
		{
			$this->groupIds[$i] = $i;
		}

		$this->dpo();
	}

/**
 * Union
 * @param  [type] $a [description]
 * @param  [type] $b [description]
 * @return [type]    [description]
 */
	public function union($a, $b) 
	{

		// If this groupIds have the same value them they are connected we can return 
		if ($this->groupIds[$a] == $this->groupIds[$b]) return;

		// Get the Group Id of the first object
		$groupId = $this->groupIds[$a];

		// Check if the second object is part of a group	
		
		for ( $i = 0; $i < count($this->groupIds); $i++ )
		{
			if ($this->groupIds[$i] == $groupId ) 
			{
				$this->groupIds[$i] = $this->groupIds[$b];
			}
		}
		// $siblings = $this->siblings($b);

		// if ($siblings)
		// {
		// 	foreach ( $siblings as $obj => $value )
		// 	{
		// 		$this->groupIds[$a] = $value;
		// 	}
		// }
		
		print($this);
	}

/**
 * Siblings
 * @param  [type] $obj [description]
 * @return [type]      [description]
 */
	public function siblings($obj) 
	{
		// Get the group ID
		$groupId = $this->groupIds[$obj];

		// Search the array
		$results = array_keys($this->groupIds, $groupId, FALSE);
		return $results;
	}

/**
 * Connected
 * @param  [type] $a [description]
 * @param  [type] $b [description]
 * @return [type]    [description]
 */
	public function connected($a, $b)
	{
		// Get group id 
		$groupId = $this->groupIds[$a];
		
		$return = $this->groupIds[$a] == $this->groupIds[$b];
		var_dump($return);
	}

/**
 * dpo
 * @return [type] [description]
 */
	private function dpo()
	{
		print("\n");
		var_dump($this->groupIds);
	}

	public function __toString()
	{
		return implode(' ', $this->groupIds) . "\n";
	}

}


$UF = new UF(10);
$UF->union(1,2);
$UF->union(9,8);
$UF->union(8,5);
$UF->union(3,1);
$UF->union(6,3);
$UF->union(8,0);



