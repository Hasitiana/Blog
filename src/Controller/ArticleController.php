<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index(): Response
    {
        $articles = $this->get('doctrine')->getManager()->getRepository(Article::class)->findAllByLimit(5);

        return $this->render('article/index.html.twig', [
            'controller_name' => 'AuteurController',
            'articles' => $articles,
            'title' => "Liste des 5 derniers articles",
        ]);
    }
    
    /**
     * @Route("/ajout_article", name="ajout_article")
     */
    public function ajoutArticle(Request $request): Response
    {
        $article = new Article();
        
        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->addFlash('success', "Un article a été bien ajouté");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            
            return $this->redirectToRoute("articles"); 
        }

        return $this->render('article/article-form.html.twig', [
            'controller_name' => 'ArticleController',
            'form_title' => "Ajouter un article",
            'form_article' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function article(int $id) : Response
    {
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->find($id);
        return $this->render('article/article.html.twig', [
            'article' => $article
        ]);
    }

}
