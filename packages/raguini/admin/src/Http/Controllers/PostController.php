<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller {
    public function index() {
        $posts = Post::paginate(15);

        $data = [
            'posts' => $posts
        ];
        return view('admin::posts_index', $data);
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

        $data = $request->all();
        $data['author_id'] = Auth::user()->id;

        $post = Post::create($data);
        
        if($post) {
            return redirect()->back()->with('message_success', 'Saved Successfully');
        }
        else {
            return redirect()->back()->with('message_error', 'Something went wrong');
        }
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