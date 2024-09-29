<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author_index')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/author/list', name: 'app_author_list')]
    public function listAuthors(): Response
    {
        $authors = [
            ['id' => 1, 'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            ['id' => 2, 'picture' => '/images/William.jpg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            ['id' => 3, 'picture' => '/images/Taha-Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@email.com', 'nb_books' => 300],
        ];
        return $this->render('author/list.html.twig', ['author' => $authors]);
    }

    #[Route('/author/{name}', name: 'app_author_show')]
    public function showAuthor($name): Response
    {
        return $this->render('author/showAuthor.html.twig', ['name' => $name]);
    }

    
    #[Route('/author/details/{id}', name: 'app_author_details')]
    public function authorDetails($id): Response
    {
        $authors = [
            ['id' => 1, 'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            ['id' => 2, 'picture' => '/images/William.jpg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            ['id' => 3, 'picture' => '/images/Taha-Hussein.jpg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@email.com', 'nb_books' => 300],
        ];

        return $this->render('author/showAuthor.html.twig', ['author' => $authors, 'id' => $id]);

    }
}
