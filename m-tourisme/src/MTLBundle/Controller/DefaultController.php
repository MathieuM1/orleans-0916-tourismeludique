<?php

namespace MTLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AdminBundle\Entity\actu;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('MTLBundle:Default:index.html.twig');
    }

    /**
     * @Route("/index")
     */
    public function ActuIndexAction()
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();

        return $this->render('MTLBundle:Default:actu.html.twig', array(
            'actus' => $actus,
        ));
    }

    /**
     * @Route("/listeactu")
     */
    public function listeActuPageAction()
    {
        $actus = $this->getDoctrine()
            ->getRepository('AdminBundle:actu')
            ->findAll();

        return $this->render('MTLBundle:Default:listeActu.html.twig', array(
            'actus' => $actus,
        ));
    }

    /**
     * Finds and displays an actu entity.
     *
     * @Route("/actushow/{id}", name="afficher_actu")
     * @Method("GET")
     */
    public function showActuAction(actu $actu)
    {
//        $oneactu = $this->getDoctrine()
//            ->getRepository('AdminBundle:actu')
//            ->findOneById($id);

        return $this->render('MTLBundle:Default:oneActu.html.twig', array(
            'actu' => $actu,
        ));
    }

}
