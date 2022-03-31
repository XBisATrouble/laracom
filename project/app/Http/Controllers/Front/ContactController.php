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
        $name = '王宝花';
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send('emails.test',['name'=>$name],function($message){
            $to = 'xbisatrouble@gmail.com';
            $message ->to($to)->subject('邮件测试');
        });
        // 返回的一个错误数组，利用此可以判断是否发送成功
        dd(Mail::failures());
        return view('front.contact',["data"=>"Success"]);
    }
}
