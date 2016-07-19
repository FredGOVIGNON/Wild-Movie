<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function articleAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/article.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}

class ArticleController extends Controller
{
    public function articleShow(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/article.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}


