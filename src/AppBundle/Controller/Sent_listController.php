<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sent_list;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Sent_list controller.
 *
 * @Route("sent_list")
 */
class Sent_listController extends Controller
{
    /**
     * Lists all sent_list entities.
     *
     * @Route("/", name="sent_list_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sent_lists = $em->getRepository('AppBundle:Sent_list')->findAll();

        return $this->render('sent_list/index.html.twig', array(
            'sent_lists' => $sent_lists,
        ));
    }

    /**
     * Finds and displays a sent_list entity.
     *
     * @Route("/{id}", name="sent_list_show")
     * @Method("GET")
     */
    public function showAction(Sent_list $sent_list)
    {

        return $this->render('sent_list/show.html.twig', array(
            'sent_list' => $sent_list,
        ));
    }
}
