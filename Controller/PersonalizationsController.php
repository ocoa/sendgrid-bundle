<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\Personalizations;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PersonalizationsController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/personalizations", name="add_personalizations")
     */
    public function addPersonalizationsAction(Request $request)
    {    
        $object = new Personalizations();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/personalizations/{id}", name="get_personalizations")
    */
    public function readPersonalizationsAction($id)
    {
        $object = new Personalizations($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/personalizations/{id}", name="update_personalizations")
	*/
    public function updatePersonalizationsAction($id)
    {

    }

    /**
    * @Route("/delete/personalizations/{id}", name="delete_personalizations")
    */
    public function deletePersonalizationsAction($ticket_id)
    {
        $object = new Personalizations($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
