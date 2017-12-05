<?php

namespace UPJV\GaleriePhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UPJVGaleriePhotoBundle:Default:index.html.twig');
    }
}
