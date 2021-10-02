<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 14/09/2021
 * Time: 12:48
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="index")
     */
    public function index():Response
    {
        return $this->render('home/index.html.twig');
    }
}