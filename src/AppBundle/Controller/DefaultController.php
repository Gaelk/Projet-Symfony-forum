<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $title="Thèmes";
        $themes=[
            ["nomTheme"=>"Base de données", "nbPost"=>"5 posts", "id"=>1],
            ["nomTheme"=>"Programmation", "nbPost"=>"2 posts","id"=>2],
            ["nomTheme"=>"Sécurité", "nbPost"=>"5 posts", "id"=>3]
        ];

        $id=1;



        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', ["themes"=>$themes, "title"=>$title, 'idz'=>$id]);


        //'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
    }


    /**
     * @param $id
     * @Route("/theme/{id}",name="theme")
     */
    public function themeAction($id){

        if($id==1){
            $title="Base de données";
        $table=[
            ["nomTheme"=>"Installer Mysql", "nbRep"=>"5 réponses", "id"=>1],
            ["nomTheme"=>"Les nouveautés de SQL Server", "nbRep"=>"3 réponses", "id"=>2],
            ["nomTheme"=>"Tout sur la clause Wher", "nbRep"=>"5 réponses","id"=>3]
        ];
        }

        if($id==2){
            $title="Programmation";
            $table=[
                ["nomTheme"=>"Installer phpStrom", "nbRep"=>"5 réponses", "id"=>1 ],
                ["nomTheme"=>"Les nouveautés xampp", "nbRep"=>"3 réponses", "id"=>2],
                ["nomTheme"=>"Tout sur Symfony", "nbRep"=>"5 réponses", "id"=>3]
            ];
        }
        if($id==3){
            $title="Sécurité";
            $table=[
                ["nomTheme"=>"protocole http", "nbRep"=>"5 réponses", "id"=>1],
                ["nomTheme"=>"criptage", "nbRep"=>"3 réponses" , "id"=>2],
                ["nomTheme"=>"Tout sur adressage IP", "nbRep"=>"5 réponses", "id"=>3]
            ];
        }


        return $this->render('default/theme.html.twig', ["themes"=>$table, "title"=>$title] );
    }





}
