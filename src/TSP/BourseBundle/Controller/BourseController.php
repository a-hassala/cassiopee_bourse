<?php

namespace TSP\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BourseController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('TSPBourseBundle:Bourse:index.html.twig');
    }
}
