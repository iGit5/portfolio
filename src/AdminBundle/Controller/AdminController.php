<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use PortfolioBundle\Form\ArticleType;
use PortfolioBundle\Entity\Article;

class AdminController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();

        return $this->render('AdminBundle:Admin:index.html.twig', array(
                'user' => $user));
    }

    public function createActicleAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash(
                'notice',
                'User was added!'
            );

            return $this->render('AdminBundle:Admin:create_article.html.twig', array(
                    'form' => $form->createView()));
        }

        return $this->render('AdminBundle:Admin:create_article.html.twig', array(
                'form' => $form->createView()));
    }

    public function showActiclesAction()
    {

      
        return $this->render('AdminBundle:Admin:show_articles.html.twig', array(
              ));

    }


}
