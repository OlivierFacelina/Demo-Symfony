<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('product', name: 'product_')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }

    #[Route('/{id}', name: 'show')]
    public function show(int $id, Product $product): Response {
        return $this->render('product/show.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(int $id, Product $product): Response {
        return $this->render('product/create.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function edit(int $id, Product $product): Response {
        return $this->render('product/create.html.twig', [
            'product' => $product
        ]);
    }
}
