<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Stats;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Stat controller.
 *
 * @Route("stats")
 */
class StatsController extends Controller
{
    /**
     * Lists all stat entities.
     *
     * @Route("/", name="stats_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stats = $em->getRepository('AppBundle:Stats')->findAll();

        return $this->render('stats/index.html.twig', array(
            'stats' => $stats,
        ));
    }

    /**
     * Finds and displays a stat entity.
     *
     * @Route("/{id}", name="stats_show")
     * @Method("GET")
     */
    public function showAction(Stats $stat)
    {

        return $this->render('stats/show.html.twig', array(
            'stat' => $stat,
        ));
    }
}
