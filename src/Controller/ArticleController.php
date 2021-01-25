<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $articles = $this->get('doctrine')->getManager()->getRepository(Article::class)->findAll();

        $articlesPagines = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('article/index.html.twig', [
            'controller_name' => 'AuteurController',
            'articles' => $articlesPagines,
            'title' => "Liste des articles",
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

    /**
     * @Route("article_modification/{id}", name="modification_article")
     */
    public function modificationArticle(Request $request, int $id) : Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $article = $entityManager->getRepository(Article::class)->find($id);
        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $entityManager->flush();
            return $this->redirectToRoute('articles');
        }

        return $this->render('article/article-form.html.twig', [
            'form_article' => $form->createView(),
            'form_title' => "Modifier un article",
        ]);
    }

}
