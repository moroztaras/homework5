<?php

namespace Fillin\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/{number}/{multiplier}")
     * @Template()
     */
    public function homeAction($number,$multiplier)
    {
        //
        $product = $number* $multiplier;
       return $this->render('FillinHomeBundle:Default:home.html.twig', array('number'=>$number,'multiplier'=>$multiplier,'product'=>$product));
    }
}
