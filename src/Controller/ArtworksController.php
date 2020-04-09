<?php

namespace App\Controller;

use App\Entity\Artwork;
use App\Form\ArtworkType;
use App\Repository\ArtworkRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Class ArtworksController
 * @package App\Controller
 */
class ArtworksController extends AbstractController
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
 * @param PaginatorInterface $paginator
 * @param Request $request
 * @param ArtworkRepository $repository
 * @return Response
 * @Route("getAcrylic", name="getAcrylic")
 */
    public function getAcrylic(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 0]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }

    /**
 * @param PaginatorInterface $paginator
 * @param Request $request
 * @param ArtworkRepository $repository
 * @return Response
 * @Route("getPastel", name="getPastel")
 */
    public function getPastel(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 1]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }

    /**
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param ArtworkRepository $repository
     * @return Response
     * @Route("getInk", name="getInk")
     */
    public function getInk(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 2]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }

    /**
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param ArtworkRepository $repository
     * @return Response
     * @Route("getSticking", name="getSticking")
     */
    public function getSticking(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 3]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }

    /**
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param ArtworkRepository $repository
     * @return Response
     * @Route("getDraws", name="getDraws")
     */
    public function getDraws(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 4]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }

    /**
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param ArtworkRepository $repository
     * @return Response
     * @Route("getWatercolor", name="getWatercolor")
     */
    public function getWatercolor(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 5]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }

    /**
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param ArtworkRepository $repository
     * @return Response
     * @Route("getVarious", name="getVarious")
     */
    public function getVarious(PaginatorInterface $paginator, Request $request, ArtworkRepository $repository): Response
    {
        $artworks = $paginator->paginate(
            $this->repository->findBy(
                ['type_art' => 6]),
            $request->query->getInt('page', 1),
            15

        );

        return $this->render('artworks/getArtwoks.html.twig', [
            'current_menu' => 'artworks',
            'artworks' => $artworks,

        ]);


    }


}
