<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortfolioBundle:Portfolio:index.html.twig');
    }

    public function articlesAction()
    {
      $articleRepository = $this->getDoctrine()->getRepository('PortfolioBundle:Article');

      $articles = $articleRepository->findAll();

      return $this->render('PortfolioBundle:Portfolio:articles.html.twig', array('articles' => $articles));

    }

    public function articleshowAction($id)
    {
        $article = $this->getDoctrine()
              ->getRepository('PortfolioBundle:Article')
              ->find($id);

          if (!$article) {
              throw $this->createNotFoundException(
                  'No article found for id '.$id
              );
          }

        return $this->render('PortfolioBundle:Portfolio:article.html.twig', array('article' => $article));
    }

    public function tutorielsAction()
    {
      return $this->render('PortfolioBundle:Portfolio:tutoriels.html.twig');

    }

    public function tutorielAction()
    {
      return $this->render('PortfolioBundle:Portfolio:tutoriel.html.twig');

    }

    public function cvAction()
    {
      return $this->render('PortfolioBundle:Portfolio:cv.html.twig');
    }

}
