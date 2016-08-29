<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\Block;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlockController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/block", name="add_block")
     */
    public function addBlockAction(Request $request)
    {    
        $object = new Block();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/block/{id}", name="get_block")
    */
    public function readBlockAction($id)
    {
        $object = new Block($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/block/{id}", name="update_block")
	*/
    public function updateBlockAction($id)
    {

    }

    /**
    * @Route("/delete/block/{id}", name="delete_block")
    */
    public function deleteBlockAction($ticket_id)
    {
        $object = new Block($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
