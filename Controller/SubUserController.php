<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\SubUser;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SubUserController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/sub_user", name="add_sub_user")
     */
    public function addSubUserAction(Request $request)
    {    
        $object = new SubUser();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/sub_user/{id}", name="get_sub_user")
    */
    public function readSubUserAction($id)
    {
        $object = new SubUser($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/sub_user/{id}", name="update_sub_user")
	*/
    public function updateSubUserAction($id)
    {

    }

    /**
    * @Route("/delete/sub_user/{id}", name="delete_sub_user")
    */
    public function deleteSubUserAction($ticket_id)
    {
        $object = new SubUser($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
