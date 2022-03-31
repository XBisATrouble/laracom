<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Mail;

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
        Mail::to("xbisatrouble@gmail.com")->send("test");
        return view('front.contact',["data"=>"Success"]);
    }
}
