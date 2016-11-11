<?php

// src/AppBundle/Menu/Builder.php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'portfolio_homepage'));

        /*
        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $blog = $em->getRepository('AppBundle:Blog')->findMostRecent();
        */

        $menu->addChild('Tutoriels', array(
            'route' => 'portfolio_tutoriels'
        ));

        $menu->addChild('Articles', array(
            'route' => 'portfolio_articles'
        ));

        $menu->addChild('Cv', array(
            'route' => 'portfolio_cv'
        ));


        // create another menu item
        //$menu->addChild('About Me', array('route' => 'about'));
        // you can also add sub level's to your menu's as follows
        //$menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
}
