<?php

namespace App\Controller;


use App\Entity\Artwork;
use App\Form\ArtworkType;
use App\Repository\ArtworkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AdminArtworkController extends AbstractController
{

    private $twig;

    private $em;

    private $repository;


    public function __construct(Environment $twig, ArtworkRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
        $this->twig = $twig;

    }

    /**
     * @Route("admin.getAll", name="admin.getAll")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     *
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
//
        $artworks = $paginator->paginate(
            $this->repository->findAll(),
            $request->query->getInt('page', 1),
            10
        );
        return $this->render('artworks/index.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks
        ]);

    }

    /**
     * @Route ("Admin.new.artwork", name="admin.new.artwork")
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws Exception
     */
    public function new(Request $request)
    {
        $artwork = new Artwork();
        $form = $this->createForm(ArtworkType::class, $artwork);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $this->em->persist($artwork);
            $this->em->flush();
            $this->addFlash('success', 'Bien créé avec succès');
            return $this->redirectToRoute('admin.new.artwork');
        }
        return $this->render('artworks/newArtworks.html.twig', [
            'artwork' => $artwork,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/admin/artworks/{id}", name="admin.delete" , methods="DELETE")
     * @param Artwork $artwork
     * @param Request $request
     * @return RedirectResponse
     *
     */
    public function delete(Artwork $artwork, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $artwork->getId(), $request->get('_token'))) {

            $this->em->remove($artwork);
            $this->em->flush();
            $this->addFlash('success', 'La toile a bien été supprimée');


        }
        return $this->redirectToRoute('admin.getAll');
    }






}
