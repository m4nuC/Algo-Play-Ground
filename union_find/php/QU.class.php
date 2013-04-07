<?php

class QU {


	private $groupsId = array();

	public function __construct($N)
	{
		// We store the Number as Index not as Value so that we can easily access them
		for ($i = 1; $i <= $N; $i++ )
		{
			$this->groupIds[$i] = $i;
		}	
	}


/**
 * Get the root of an object
 * @param  [type] $obj [description]
 * @return [type]      [description]
 */
	public function root($obj) 
	{
		// Get the group ID
		$groupId = $this->groupIds[$obj];

		while ( $this->groupIds[$obj] != $obj )
		{
			$obj = $this->groupIds[$obj];
		}

		return $obj;
	}

/**
 * Union
 * @param  [type] $a [description]
 * @param  [type] $b [description]
 * @return [type]    [description]
 */
	public function union($a, $b)
	{
		$i = $this->root($this->groupIds[$a]);
		$j = $this->root($this->groupIds[$b]);
		$this->groupIds[$i] = $j;	
		$this->dpo();
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
		var_dump($this->root($a) == $this->root($b));

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

}


$QU = new QU(10);
$QU->union(1,2);
$QU->union(5,2);
$QU->union(6,2);
$QU->union(2,3);
$QU->union(10,6);
$QU->connected(10,6);
$QU->connected(10,9);

