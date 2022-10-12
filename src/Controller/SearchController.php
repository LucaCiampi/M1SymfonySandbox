<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends AbstractController
{
    #[Route('/', name: 'app_search')]
    public function renderSearchResults(Request $request): Response
    {
        // dump($request->query->get('search'));
        // dump($request->query->get('page'));
        $query = [];
        $query["search"] = $request->query->get('search');
        $query["page"] = $request->query->get('page');

        return $this->render('search/search.html.twig', [
            'query' => $query,
        ]);
    }
}
