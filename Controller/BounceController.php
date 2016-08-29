<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\Bounce;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BounceController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/bounce", name="add_bounce")
     */
    public function addBounceAction(Request $request)
    {    
        $object = new Bounce();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/bounce/{id}", name="get_bounce")
    */
    public function readBounceAction($id)
    {
        $object = new Bounce($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/bounce/{id}", name="update_bounce")
	*/
    public function updateBounceAction($id)
    {

    }

    /**
    * @Route("/delete/bounce/{id}", name="delete_bounce")
    */
    public function deleteBounceAction($ticket_id)
    {
        $object = new Bounce($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
