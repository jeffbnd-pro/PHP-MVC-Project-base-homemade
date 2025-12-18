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
        return $this->view('products/create');
    }
    
    public function store(): Response
    {
        $data = [':name, :brand, :reference, :quantity, :price, :availability, :category_id, :users_id'];
        $products = $this->products->create($data);

        return $this->view('products/create', [
            'title' => 'Créer un produit',
            'message' => 'Entrez les information du produit',
            'products' => $products

        ]);
    }
}
