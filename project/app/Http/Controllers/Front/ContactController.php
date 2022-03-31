<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contact;

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
        // Mail::send('emails.contact.email',['name'=>$name, 'email'=>$email, 'userMessage'=>$userMessage],function($message){
        //     $to = 'xbisatrouble@gmail.com';
        //     $message ->to($to)->subject('Contact Us');
        // });
        return view('front.contacts.contact',["data"=>"Success"]);
    }
}
