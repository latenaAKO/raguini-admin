<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Models\Post;

class PostController extends Controller {
    public function index() {
        return view('admin::posts_index');
    }

    public function create() {
        return view('admin::posts_create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|min:3|max:191',
            'body'  => 'required',
            'slug'  => 'max:191|regex:/^([a-zA-Z\d]+-)*([a-zA-Z\d]+)/|unique:posts,slug'
        ]);

        $post = Post::create($request->all());
        
        dd($post);
    }

    public function edit($id) {
        $data = [

        ];
        return view('admin::post_edit', $data);
    }

    public function update($id, Request $request) {
        dd($request);
    }
}