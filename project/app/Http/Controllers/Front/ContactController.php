<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contact;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('front.contacts.contact', ["data"=>""]);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $userMessage = $request->input('message');
        Mail::to('xbisatrouble@gmail.com')->send(new Contact($name, $email, $userMessage));
        Alert::success('We have reviced your message');
        return view('front.contacts.contact',["data"=>"Success"]);
    }
}
