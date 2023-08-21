<?php

namespace App\Controller;

use App\Repository\AttackInfosRepository;
use App\Repository\CharacterRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(CharacterRepository $characterRepository, AttackInfosRepository $attackInfosRepository): Response
    {
        return $this->render('main/index.html.twig', [

                'characters' => $characterRepository->findAll(),
                'attackinfos' => $attackInfosRepository->findAll()
        ]);
    }
}
