<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function showContactForm()
    {
        return view('contact_form');
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to('kamil19862307@gmail.com')->send(new ContactForm($request->validated()));

        return redirect(route('contacts'));
    }

    public function news()
    {
        $posts = Post::orderby('created_at', 'DESC')->limit(6)->get();

        return view('news', [
            'posts' => $posts,
        ]);
    }

    public function showEdit()
    {
        return view('admin.show_edit');
    }

    public function edit()
    {
        return view('admin.edit');
    }
}
