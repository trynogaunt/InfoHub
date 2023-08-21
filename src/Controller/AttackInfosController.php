<?php

namespace App\Controller;

use App\Entity\AttackInfos;
use App\Form\AttackInfosType;
use App\Repository\AttackInfosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/attack/infos')]
class AttackInfosController extends AbstractController
{
    #[Route('/', name: 'app_attack_infos_index', methods: ['GET'])]
    public function index(AttackInfosRepository $attackInfosRepository): Response
    {
        return $this->render('attack_infos/index.html.twig', [
            'attack_infos' => $attackInfosRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_attack_infos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attackInfo = new AttackInfos();
        $form = $this->createForm(AttackInfosType::class, $attackInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($attackInfo);
            $entityManager->flush();

            return $this->redirectToRoute('app_attack_infos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attack_infos/new.html.twig', [
            'attack_info' => $attackInfo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attack_infos_show', methods: ['GET'])]
    public function show(AttackInfos $attackInfo): Response
    {
        return $this->render('attack_infos/show.html.twig', [
            'attack_info' => $attackInfo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_attack_infos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AttackInfos $attackInfo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AttackInfosType::class, $attackInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_attack_infos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attack_infos/edit.html.twig', [
            'attack_info' => $attackInfo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_attack_infos_delete', methods: ['POST'])]
    public function delete(Request $request, AttackInfos $attackInfo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$attackInfo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($attackInfo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_attack_infos_index', [], Response::HTTP_SEE_OTHER);
    }
}
