<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Post;
use App\Post_Group;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function show(Request $request)
    {
        # code...
    }

    public function create()
    {
        $post_groups = Post_Group::all();
        return view('admin.posts.create', compact('post_groups'));
    }

    public function store(PostRequest $request)
    {
        $image = '';
        if ( $request->hasFile('image') ) {
            $file = $request->file('image');
            $nameImage = $file->getClientOriginalName();
            $image = time()."_".$nameImage;
            while (file_exists('images/uploads/posts/'.$image)) {
                $image = time()."_".$nameImage;
            }
            $file->move("images/uploads/posts", $image);
        }

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'post_group_id' => $request->post_group_id,
        ]);

        if ($post) {
            return redirect()->route('admin.posts.index');
        }
        return redirect()->back();
    }

    public function edit($id)
    {
       $post = Post::find($id);
       $old_post_group = $post->postGroup;
       $post_groups = Post_Group::all();
       return view('admin.posts.edit', compact('post', 'old_post_group', 'post_groups'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $image_post = $post->image;
        if ( $request->hasFile('image' )) {
            $file = $request->file('image');
            $nameImage = $file->getClientOriginalName();
            $image = time()."_".$nameImage;
            while (file_exists('images/uploads/posts/'.$image)) {
                $image = time()."_".$nameImage;
            }    
            $file->move("images/uploads/posts", $image);
            $image_post = $image;
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_post,
            'post_group_id' => $request->post_group_id,
        ]);

        return redirect()->route('admin.posts.index')->with('success','Cập nhật thành công');
    }

    public function delete(Request $request)
    {
       $post = Post::find($request->id);
       $post->delete();
       return response()->json([
            'message' => '<div class="col-md-6 alert alert-success"> Xóa thành công! </div>',
        ]);
    }
}
