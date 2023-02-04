<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderby('created_at', 'DESC')->paginate(6);


        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.posts.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        if($request->has('thumbnail')) {
            $thumbnail = str_replace('public/posts', '', $request->file('thumbnail')->store('public/posts'));

            $data['thumbnail'] = $thumbnail;
        }

        //Сюда возвращаемся когда правила валидации прошли
        Post::create($data);

        return redirect(route('admin.posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(PostFormRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validated();

        if($request->has('thumbnail')) {
            $thumbnail = str_replace('public/posts', '', $request->file('thumbnail')->store('public/posts'));

            $data['thumbnail'] = $thumbnail;
        }

        $post->update($data);

        return redirect(route('admin.posts.index'));
    }


    public function destroy($id)
    {
        Post::destroy($id);

        return back();
    }
}
