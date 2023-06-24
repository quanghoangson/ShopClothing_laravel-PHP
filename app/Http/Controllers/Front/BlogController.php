<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private  $productService;
    private  $blogService;
    public function __construct(ProductServiceInterface $productService,
                                BlogRepositoryInterface $blogService)
    {
        $this->productService=$productService;
        $this->blogService=$blogService;
    }
    public function index(Request $request)
    {
        $featuredProducts=$this->productService->getFeaturedProducts();
        $blogs=$this->blogService->getLatestBlogs();
        $products =$this->productService->getProductOnIndex($request);
        return view('front.blog.index',compact('featuredProducts','blogs','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
