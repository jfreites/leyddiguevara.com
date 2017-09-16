<?php

namespace App\Http\Controllers\Admin;

use App\Cms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Cms::orderBy('created_at', 'desc')->get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // Create slug url
        if ($data['category_id'] == 1) {
            $slug = 'noticia-' . str_slug($data['title'], '-');
        } else {
            $slug = 'promocion-' . str_slug($data['title'], '-');
        }
        // Process image
        $imageName = '';
        if ($request->file('banner')) {
            $imageName = $slug . '.' . $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move(base_path() . '/public/uploads/posts/', $imageName);
        }
        // save post
        $post = new Cms;
        $post->title = $data['title'];
        $post->slug = $slug;
        $post->body = $data['body'];
        $post->category_id = $data['category_id'];
        $post->banner = $imageName;
        $post->active = $data['active'];
        $post->save();

        return redirect(route('admin.posts.index'))->with('message', 'Creada nueva publicación!');
    }

    public function edit($id)
    {
        $post = Cms::find($id);

        if (!$post) {
            return redirect(route('admin.posts.index'))->with('message', 'La publicación no existe.');
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Cms::find($id);

        if (!$post) {
            return redirect(route('admin.posts.index'))->with('message', 'La publicación no existe.');
        }
        // Form content
        $data = $request->all();

        // Process image
        if ($request->file('banner')) {
            $imageName = $post->slug . '.' . $request->file('banner')->getClientOriginalExtension();
            // remove if exists...
            if (file_exists(public_path() . '/public/uploads/posts/' . $imageName)) {
                \File::delete(public_path() . '/public/uploads/posts/' . $imageName);
            }
            // upload the new one...
            $request->file('banner')->move(base_path() . '/public/uploads/posts/', $imageName);
            $post->banner = $imageName;
        }
        // Update model
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->active = $data['active'];
        $post->save();

        return redirect(route('admin.posts.index'))->with('message', 'Publicación actualizada!');
    }
}
