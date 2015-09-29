<?php

namespace BlogApp\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AppController
{
    public function frontpageAction(Application $app, Request $request)
    {
        return new Response($app['twig']->render(
            '@BaseTemplates/frontpage.html.twig'
        ));
    }
    
    public function blogIndexAction(Application $app, Request $request)
    {
        $repo = $app->getRepository('blog');
        $entities = $repo->findAll();
        print_r($entities);
        exit();
        
        $data = array(
            'name' => 'blog',
            'entities' => $entities
        );
        return new Response($app['twig']->render(
            '@Templates/blog/index.html.twig',
            $data
        ));
    }
}
