<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\SendMail;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SendMailController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/send_mail", name="add_send_mail")
     */
    public function addSendMailAction(Request $request)
    {    
        $object = new SendMail();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/send_mail/{id}", name="get_send_mail")
    */
    public function readSendMailAction($id)
    {
        $object = new SendMail($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/send_mail/{id}", name="update_send_mail")
	*/
    public function updateSendMailAction($id)
    {

    }

    /**
    * @Route("/delete/send_mail/{id}", name="delete_send_mail")
    */
    public function deleteSendMailAction($ticket_id)
    {
        $object = new SendMail($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
