<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Newsletter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Newsletter controller.
 *
 * @Route("newsletter")
 */
class NewsletterController extends Controller
{
    /**
     * Lists all newsletter entities.
     *
     * @Route("/", name="newsletter_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $newsletters = $em->getRepository('AppBundle:Newsletter')->findAll();

        return $this->render('newsletter/index.html.twig', array(
            'newsletters' => $newsletters,
        ));
    }

    /**
     * Finds and displays a newsletter entity.
     *
     * @Route("/{id}", name="newsletter_show")
     * @Method("GET")
     */
    public function showAction(Newsletter $newsletter)
    {

        return $this->render('newsletter/show.html.twig', array(
            'newsletter' => $newsletter,
        ));
    }
}
