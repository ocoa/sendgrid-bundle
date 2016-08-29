<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\Content;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContentController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/content", name="add_content")
     */
    public function addContentAction(Request $request)
    {    
        $object = new Content();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/content/{id}", name="get_content")
    */
    public function readContentAction($id)
    {
        $object = new Content($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/content/{id}", name="update_content")
	*/
    public function updateContentAction($id)
    {

    }

    /**
    * @Route("/delete/content/{id}", name="delete_content")
    */
    public function deleteContentAction($ticket_id)
    {
        $object = new Content($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
