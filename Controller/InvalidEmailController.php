<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\InvalidEsend;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InvalidEsendController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/invalid_esend", name="add_invalid_esend")
     */
    public function addInvalidEsendAction(Request $request)
    {    
        $object = new InvalidEsend();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/invalid_esend/{id}", name="get_invalid_esend")
    */
    public function readInvalidEsendAction($id)
    {
        $object = new InvalidEsend($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/invalid_esend/{id}", name="update_invalid_esend")
	*/
    public function updateInvalidEsendAction($id)
    {

    }

    /**
    * @Route("/delete/invalid_esend/{id}", name="delete_invalid_esend")
    */
    public function deleteInvalidEsendAction($ticket_id)
    {
        $object = new InvalidEsend($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
