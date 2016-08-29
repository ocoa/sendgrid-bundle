<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace SendgridBundle\Entity\Definition;

/**
 * Definition class for the Alert connector object
 *
 */
trait AlertDefinition
{    


	private $type;    


	private $emailTo;    


	private $percentage;    


	private $frequency;    

	public function setType($type)
	{
		$this->type = $type;
		
		return $this;
	}
	
	public function getType()
	{
		return $this->type;
	}
    

	public function setEmailTo($emailTo)
	{
		$this->emailTo = $emailTo;
		
		return $this;
	}
	
	public function getEmailTo()
	{
		return $this->emailTo;
	}
    

	public function setPercentage($percentage)
	{
		$this->percentage = $percentage;
		
		return $this;
	}
	
	public function getPercentage()
	{
		return $this->percentage;
	}
    

	public function setFrequency($frequency)
	{
		$this->frequency = $frequency;
		
		return $this;
	}
	
	public function getFrequency()
	{
		return $this->frequency;
	}
}