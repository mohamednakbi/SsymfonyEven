<?php

namespace App\Controller;

use App\Entity\GategorieEvenement;
use App\Form\GategorieEvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;

use Knp\Bundle\SnappyBundle\Snappy;
use Knp\Bundle\SnappyBundle\DependencyInjection;









#[Route('/gategorie/evenement')]
class GategorieEvenementController extends AbstractController
{
    #[Route('/', name: 'gategorie_evenement_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $gategorieEvenements = $entityManager
            ->getRepository(GategorieEvenement::class)
            ->findAll();

        return $this->render('gategorie_evenement/index.html.twig', [
            'gategorie_evenements' => $gategorieEvenements,
        ]);
    }

    #[Route('/new', name: 'gategorie_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $gategorieEvenement = new GategorieEvenement();
        $form = $this->createForm(GategorieEvenementType::class, $gategorieEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($gategorieEvenement);
            $entityManager->flush();

            return $this->redirectToRoute('gategorie_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gategorie_evenement/new.html.twig', [
            'gategorie_evenement' => $gategorieEvenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'gategorie_evenement_show', methods: ['GET'])]
    public function show(GategorieEvenement $gategorieEvenement): Response
    {
        return $this->render('gategorie_evenement/show.html.twig', [
            'gategorie_evenement' => $gategorieEvenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'gategorie_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GategorieEvenement $gategorieEvenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GategorieEvenementType::class, $gategorieEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('gategorie_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gategorie_evenement/edit.html.twig', [
            'gategorie_evenement' => $gategorieEvenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'gategorie_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, GategorieEvenement $gategorieEvenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gategorieEvenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($gategorieEvenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gategorie_evenement_index', [], Response::HTTP_SEE_OTHER);
    }






    /**
     * @Route("/gategorie/pdfsnappy", name="pdfsnappy",methods={"GET"} )
     */
    public function listCandidats(Request $request,Pdf $snappy)
    {
       $repo = $this->getDoctrine()->getRepository(GategorieEvenement::class);      
       $gategorie = $repo->findAll();
       //$snappy = $this->get("knp_snappy.pdf");
       //$snappy->setOption("encoding", "UTF-8");

       $html = $this->renderView('gategorie_evenement/list.html.twig', [
            'gategorie'=> $gategorie,
            'title' => "Welcome to our PDF Test"
         ]);
       $filename = "myfirst_pdf_with_snappy";

       return new Response(
           $snappy->getOutputFromHtml($html),
           200,
           array(
               'Content-Type' => 'application/pdf',
               'Content-Disposition' => 'inline; filename="'.$filename.'.pdf"'
           )
       );
}






}
