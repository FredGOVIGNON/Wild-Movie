<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use UserBundle\Entity\Post;

class CommentController extends Controller 
{

    public function postAction(Request $request) 
    {

        $em=$this->getDoctrine()->getManager();
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $post = new Post;

        if ($request->request->getIdFilm('titre') != NULL) {
            $commentaire = $request->request->get('commentaire');
            $auteur = $request->request->getUser('username');
            $date = $request->request->get('date');
            
            $post->setCommentaire($commentaire);
            $post->setAuteur($user->getUsername());
            $post->setdate($date);

           $em->persist($post);
           $em->flush();
        }

        $allPost = $em->getRepository('AppBundle:Comment')->findAll();

        return $this->render('default/article.html.twig', array(
            'allPost' => $allPost,
        ));  
    }
}
