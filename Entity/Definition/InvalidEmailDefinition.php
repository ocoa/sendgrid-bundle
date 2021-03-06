<?php
/**
 * This file is autogenerated. All changes done in this file will be lost.
 */

namespace SendgridBundle\Entity\Definition;

/**
 * Definition class for the InvalidEsend connector object
 *
 */
trait InvalidEsendDefinition
{    

	 /**
	 * @var datetime
	 *
	 
	 */
	
	private $startTime;
	
    

	 /**
	 * @var datetime
	 *
	 
	 */
	
	private $endTime;
	
    

	 /**
	 * @var integer
	 *
	 
	 */
	
	private $limit;
	
    

	 /**
	 * @var integer
	 *
	 
	 */
	
	private $offset;
	
    

	
	/**
	 * Get startTime
	 *
	 * @return datetime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}

	/**
	 * Set startTime
	 *
	 * @param  datetime $startTime
	 * @return InvalidEsend
	 */
	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		
		return $this;
	}	
    

	
	/**
	 * Get endTime
	 *
	 * @return datetime
	 */
	public function getEndTime()
	{
		return $this->endTime;
	}

	/**
	 * Set endTime
	 *
	 * @param  datetime $endTime
	 * @return InvalidEsend
	 */
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		
		return $this;
	}	
    

	
	/**
	 * Get limit
	 *
	 * @return integer
	 */
	public function getLimit()
	{
		return $this->limit;
	}

	/**
	 * Set limit
	 *
	 * @param  integer $limit
	 * @return InvalidEsend
	 */
	public function setLimit($limit)
	{
		$this->limit = $limit;
		
		return $this;
	}	
    

	
	/**
	 * Get offset
	 *
	 * @return integer
	 */
	public function getOffset()
	{
		return $this->offset;
	}

	/**
	 * Set offset
	 *
	 * @param  integer $offset
	 * @return InvalidEsend
	 */
	public function setOffset($offset)
	{
		$this->offset = $offset;
		
		return $this;
	}	
}