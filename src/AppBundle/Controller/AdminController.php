<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin/themes")
     */
    public function themeAction()
    {
        return $this->render(':Admin:theme.html.twig', array(
            // ...
        ));
    }

}
