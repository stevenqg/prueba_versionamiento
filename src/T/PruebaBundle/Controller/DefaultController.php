<?php

namespace T\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TPruebaBundle:Default:index.html.twig');
    }
}
