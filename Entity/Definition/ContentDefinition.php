<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace SendgridBundle\Entity\Definition;

/**
 * Definition class for the Content connector object
 *
 */
trait ContentDefinition
{    


	private $type;    


	private $value;    

	public function setType($type)
	{
		$this->type = $type;
		
		return $this;
	}
	
	public function getType()
	{
		return $this->type;
	}
    

	public function setValue($value)
	{
		$this->value = $value;
		
		return $this;
	}
	
	public function getValue()
	{
		return $this->value;
	}
}