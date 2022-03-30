<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class ContactController
{
    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('front.contact', ["data"=>""]);
    }

    public function store()
    {
        return view('front.contact',["data"=>"Success"]);
    }
}
