<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Services\Product\ProductServiceInterface;

class HomeController extends Controller
{
    private  $productService;
    private  $blogService;
    public function __construct(ProductServiceInterface $productService,
    BlogRepositoryInterface $blogService)
    {
    $this->productService=$productService;
        $this->blogService=$blogService;
    }

    //
    public  function  index(){
        $featuredProducts=$this->productService->getFeaturedProducts();
        $blogs=$this->blogService->getLatestBlogs();
        return view('front.index',compact('featuredProducts','blogs'));
    }
}
