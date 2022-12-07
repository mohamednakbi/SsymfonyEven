<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepo;
use Dompdf\Dompdf;
use Dompdf\Options;

use MercurySeries\FlashyBundle\FlashyNotifier;

#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route('/', name: 'evenement_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $requestsql = $this->getDoctrine()->getRepository(Evenement::class)->mise_a_joure();




        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();





            
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/new', name: 'evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


          
            $file = $form->get('image')->getData();
            if ($file !== null) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {

                    // ... handle exception if something happ
                    
                }
                $evenement->setImage($fileName);
            }



            if($evenement->getDateDebut()<$evenement->getDateFin()){

                $entityManager->persist($evenement);
                $entityManager->flush();
    
                return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
            }
            else{

                $flashy->error('Date debut doit etre inferieur a date fin!');
                
                return $this->redirectToRoute('evenement_new', [], Response::HTTP_SEE_OTHER);
 
            }

            
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }









    #[Route('/{id}', name: 'evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {




            $file = $form->get('image')->getData();
            if ($file !== null) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {

                    // ... handle exception if something happ
                    
                }
                $evenement->setImage($fileName);
            }








            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
    }









    /**
     * @Route("/e/statmohamed", name="statmohamed", methods={"GET"})
     */
    public function reclamation_stat(EvenementRepo $evrpo): Response
    {
        $nbrs[]=Array();

        $e1=$evrpo->find_Nb_Rec_Par_Status("sport");
        dump($e1);
        $nbrs[]=$e1[0][1];


        $e2=$evrpo->find_Nb_Rec_Par_Status("femme de menage");
        dump($e2);
        $nbrs[]=$e2[0][1];


        dump($nbrs);
        reset($nbrs);
        dump(reset($nbrs));
        $key = key($nbrs);
        dump($key);
        dump($nbrs[$key]);

        unset($nbrs[$key]);

        $nbrss=array_values($nbrs);
        dump(json_encode($nbrss));

        return $this->render('evenement/statevenement.html.twig', [
            'nbr' => json_encode($nbrss),
        ]);
    }







    
    /**
     * @Route("/r/{id}", name="showmapevenement", methods={"GET"})
     */
    public function showMap(Evenement $evenement): Response
    {
        return $this->render('evenement/showmap.html.twig', [
            'evenement' => $evenement,
        ]);
    }






    

    /**
     * @Route("/evenement/pdf", name="pdf0",methods={"GET"} )
     */
    public function pdf(Request $request){

        // Configure Dompdf according to your needs
                $pdfOptions = new Options();
                $pdfOptions->set('defaultFont', 'Arial');
        // Instantiate Dompdf with our options
                $dompdf = new Dompdf($pdfOptions);
                $repository=$this->getdoctrine()->getrepository(Evenement::class);
                $allCoch=$repository->findAll();
        // Retrieve the HTML generated in our twig file
                $html = $this->renderView('evenement/pdf.html.twig', [
                    'title' => "Welcome to our PDF Test", 'evenement'=>$allCoch,
                ]);
        // Load HTML to Dompdf
                $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
                $dompdf->setPaper('A1', 'portrait');
        // Render the HTML as PDF
                $dompdf->render();
        // Output the generated PDF to Browser (force download)
                $dompdf->stream("Evenement.pdf", [
                    "Attachment" => true
                ]);
            }
        









}
