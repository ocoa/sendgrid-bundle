<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace SendgridBundle\Entity\Definition;

/**
 * Definition class for the SendMail connector object
 *
 */
trait SendMailDefinition
{    


	private $personalizations;    


	private $fromEmail;    


	private $content;    

	public function setPersonalizations($personalizations)
	{
		$this->personalizations = $personalizations;
		
		return $this;
	}
	
	public function getPersonalizations()
	{
		return $this->personalizations;
	}
    

	public function setFromEmail($fromEmail)
	{
		$this->fromEmail = $fromEmail;
		
		return $this;
	}
	
	public function getFromEmail()
	{
		return $this->fromEmail;
	}
    

	public function setContent($content)
	{
		$this->content = $content;
		
		return $this;
	}
	
	public function getContent()
	{
		return $this->content;
	}
}