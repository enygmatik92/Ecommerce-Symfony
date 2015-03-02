<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()//methode
    {
        return $this->render('EcommerceBundle:Default:index.html.twig'); //this->render = appel à une vue
    }
    public function firstTestAction()
    {
        return $this->render('EcommerceBundle:Default:first.html.twig'); //retourne templace
    }
    public function secondTestAction()
    {
        return $this->render('EcommerceBundle:Default:first.html.twig'); 
    }
}
