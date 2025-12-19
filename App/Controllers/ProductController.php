<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;

final class ProductController extends Controller
{
    private ProductRepository $products;
    private CategoryRepository $categories;

    public function __construct(
        Request $request,
        ProductRepository $products,
        CategoryRepository $categories
    ) {
        parent::__construct($request);
        $this->products = $products;
        $this->categories = $categories;
    }

    public function index(): Response
    {
        $products = $this->products->findAll();
        return $this->view('products/index', [
            'products' => $products,
        ]);
    }

    public function show(): Response
    {
        $id = (int) $this->request->query('id');
        $product = $this->products->findOneById($id);

        if (!$product) {
            return new Response('Produit introuvable', 404);
        }

        return $this->view('products/show', [
            'product' => $product
        ]);
    }

    public function create(): Response
    {
        return $this->view('products/create', [
            'categories' => $this->categories->findAll()
        ]);
    }

    public function store(): Response
    {
        $data = [
            'name' => trim((string) $this->request->input('name')),
            'brand' => trim((string) $this->request->input('brand')),
            'reference' => trim((string) $this->request->input('reference')),
            'quantity' => (int) $this->request->input('quantity'),
            'price' => (float) $this->request->input('price'),
            'availability' => (int) $this->request->input('availability'),
            'category_id' => (int) $this->request->input('category_id'),
            'users_id' => 1, // provisoire
        ];

        if ($data['name'] === '') {
            return $this->view('products/create', [
                'error' => 'Le nom est obligatoire',
                'product' => $data,
                'categories' => $this->categories->findAll()
            ], 422);
        }

        $this->products->create($data);

        return Response::redirect('/products');
    }

    public function edit(): Response
    {
        $id = (int) $this->request->query('id');
        $id2 = $_GET['id'];

        var_dump($id, $id2);
        $product = $this->products->findOneById($id);

        if (!$product) {
            return new Response('Produit introuvable', 404);
        }

        return $this->view('products/edit', [
            'product' => $product,
            'categories' => $this->categories->findAll()
        ]);
    }

    public function update(): Response
    {
        $id = (int) $this->request->input('id');

        if ($id <= 0) {
            return new Response("ID invalide", 400);
        }

        $data = [
            'name' => trim((string) ($this->request->input('name') ?? '')),
            'brand' => $this->request->input('brand'),
            'reference' => $this->request->input('reference'),
            'quantity' => (int) $this->request->input('quantity'),
            'price' => (float) $this->request->input('price'),
            'availability' => $this->request->input('availability') ? 1 : 0,
            'category_id' => (int) $this->request->input('category_id'),
        ];

        $this->products->update($id, $data);

        return Response::redirect("/products");
    }

    public function delete(): Response
    {
        $id = (int) $this->request->input('id');
        $this->products->delete($id);

        return Response::redirect("/products");
    }


}
