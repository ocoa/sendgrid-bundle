<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace SendgridBundle\Entity\Definition;

/**
 * Definition class for the Bounce connector object
 *
 */
trait BounceDefinition
{    


	private $startTime;    


	private $endTime;    

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		
		return $this;
	}
	
	public function getStartTime()
	{
		return $this->startTime;
	}
    

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		
		return $this;
	}
	
	public function getEndTime()
	{
		return $this->endTime;
	}
}