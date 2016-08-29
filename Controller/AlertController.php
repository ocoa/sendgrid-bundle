<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\Alert;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AlertController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/alert", name="add_alert")
     */
    public function addAlertAction(Request $request)
    {    
        $object = new Alert();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/alert/{id}", name="get_alert")
    */
    public function readAlertAction($id)
    {
        $object = new Alert($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/alert/{id}", name="update_alert")
	*/
    public function updateAlertAction($id)
    {

    }

    /**
    * @Route("/delete/alert/{id}", name="delete_alert")
    */
    public function deleteAlertAction($ticket_id)
    {
        $object = new Alert($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
