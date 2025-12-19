<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Response;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Core\Request;

class ProductController extends Controller
{
    private ProductRepository $products;
    private CategoryRepository $categories;

    public function __construct(Request $request, ProductRepository $products, CategoryRepository $categories) {
        parent::__construct($request);
        $this->products = $products;
        $this->categories = $categories;
    }

    public function index(): Response
    {
        $products = $this->products->findAll();

        return $this->view('products/index', [
            'title' => 'Bienvenue sur la page produit',
            'message' => 'Voici toute les informations concernant les produits',
            'products' => $products
        ]);
    }


    public function create(): Response
    {
        // On récupère les catégories pour les afficher dans le <select> du formulaire
        $categories = $this->categories->findAll();

        return $this->view('products/create', [
            'title' => 'Créer un produit',
            'categories' => $categories
        ]);
    }
    
    public function store(): Response
    {
        $data = [
            'name' => $_POST['name'] ?? '',
            'brand' => $_POST['brand'] ?? null,
            'reference' => $_POST['reference'] ?? null,
            'quantity' => (int) ($_POST['quantity'] ?? 0),
            'price' => (float) ($_POST['price'] ?? 0),
            'availability' => isset($_POST['availability']) ? 1 : 0,
            'category_id' => (int) ($_POST['category_id'] ?? 0),
            'users_id' => 1
        ];
        if (!empty($data['name']) && $data['category_id'] > 0) {
            $this->products->create($data);
            echo "<script>window.location.href='/products';</script>";
        }
    }

    public function show(): Response
    {
        $products = $this->products->findOneById($_GET['id']);

        return $this->view('products/show', [
            'title' => 'Bienvenue sur la page détail produit',
            'message' => 'Voici toute les informations concernant ce produit',
            'products' => $products
        ]);
    }

    public function edit(): Response
    {

    }


}
