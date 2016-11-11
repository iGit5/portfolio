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
      return $this->render('PortfolioBundle:Portfolio:articles.html.twig');

    }

    public function articleAction()
    {
      return $this->render('PortfolioBundle:Portfolio:article.html.twig');

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
