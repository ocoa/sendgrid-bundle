<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\InvalidEmail;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InvalidEmailController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/invalid_email", name="add_invalid_email")
     */
    public function addInvalidEmailAction(Request $request)
    {    
        $object = new InvalidEmail();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/invalid_email/{id}", name="get_invalid_email")
    */
    public function readInvalidEmailAction($id)
    {
        $object = new InvalidEmail($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/invalid_email/{id}", name="update_invalid_email")
	*/
    public function updateInvalidEmailAction($id)
    {

    }

    /**
    * @Route("/delete/invalid_email/{id}", name="delete_invalid_email")
    */
    public function deleteInvalidEmailAction($ticket_id)
    {
        $object = new InvalidEmail($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
