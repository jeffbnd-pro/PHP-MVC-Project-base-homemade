<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;

final class CategoryController extends Controller
{
    private CategoryRepository $categories;

    public function __construct(
        Request $request,
        CategoryRepository $categories
    ) {
        parent::__construct($request);
        $this->categories = $categories;
    }

    public function index(): Response
    {
        $categories = $this->categories->findAll();
        return $this->view('category/index', [
            'category' => $categories,
        ]);
    }

}
