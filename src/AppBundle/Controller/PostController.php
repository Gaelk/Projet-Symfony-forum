<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/post/{id}", name="post")
     */
    public function detailsAction($id)
    {


        if($id==1){
            $title="Installer Mysqls";
            $table=[

            ];
        }

        if($id==2){
            $title="Les nouveautés de SQL Serve";
            $table=[

            ];
        }
        if($id==3){
            $title="Tout sur la clause Where";
            $table=[

            ];
        }

        return $this->render(':Post:details.html.twig', array("themes"=>$table,  "title"=>$title ));
    }

}
