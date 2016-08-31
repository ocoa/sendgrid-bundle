<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\Send;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SendController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/send", name="add_send")
     */
    public function addSendAction(Request $request)
    {    
        $object = new Send();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/send/{id}", name="get_send")
    */
    public function readSendAction($id)
    {
        $object = new Send($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/send/{id}", name="update_send")
	*/
    public function updateSendAction($id)
    {

    }

    /**
    * @Route("/delete/send/{id}", name="delete_send")
    */
    public function deleteSendAction($ticket_id)
    {
        $object = new Send($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
s->createJsonResponse(1);     
    }

}
reateJsonResponse(1);     
    }

}
