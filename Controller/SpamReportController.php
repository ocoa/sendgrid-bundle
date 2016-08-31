<?php

namespace SendgridBundle\Controller;

use SendgridBundle\Entity\SpamReport;

use SendgridBundle\Utils\ControllerAbstract;
use SendgridBundle\Utils\EntityHandling;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SpamReportController extends ControllerAbstract
{
    use EntityHandling;

    /**
     * @Route("/add/spam_report", name="add_spam_report")
     */
    public function addSpamReportAction(Request $request)
    {    
        $object = new SpamReport();
        $object = $object->persist();
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

    /**
    * @Route("/get/spam_report/{id}", name="get_spam_report")
    */
    public function readSpamReportAction($id)
    {
        $object = new SpamReport($id);
        $data = $this->convertEntity($object);
        return $this->createJsonResponse($data);
    }

	/**
	* @Route("/update/spam_report/{id}", name="update_spam_report")
	*/
    public function updateSpamReportAction($id)
    {

    }

    /**
    * @Route("/delete/spam_report/{id}", name="delete_spam_report")
    */
    public function deleteSpamReportAction($ticket_id)
    {
        $object = new SpamReport($id);
        $object->remove();
        $object->persist();  
        return $this->createJsonResponse(1);     
    }

}
