<?php

namespace App\Controller\Front;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class CategoryController extends AbstractController
{
  /**
   * @Route("/categories", name="categoryList")
   */
  public function categoryList(CategoryRepository $categoryRepository)
  {
    $categories = $categoryRepository->findAll();
    return $this->render("front/categories.html.twig", ['categories' => $categories]);
  }

  /**
   * @Route("/category/{id}", name="categoryShow")
   */
  public function categoryShow($id, CategoryRepository $categoryRepository)
  {
    $category = $categoryRepository->find($id);
    return $this->render("front/category.html.twig", ['category' => $category]);
  }
}
