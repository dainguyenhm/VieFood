<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostGroupRequest;
use Illuminate\Http\Request;
use App\Post_Group;

class PostGroupController extends Controller
{
    public function index()
    {
        $post_groups = Post_Group::all();
        return view('admin.post-groups.index', compact('post_groups'));
    }

    public function create()
    {
        return view('admin.post-groups.create');
    }

    public function store(PostGroupRequest $request)
    {
        $post_group = Post_Group::create(['name' => $request->name]);
        if ($post_group) {
            return redirect()->route('admin.post-groups.index')->with('success', 'Thêm mới thành công');
        }
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $post_group = Post_Group::find($request->id);
        $view = view('admin.post-groups.edit', compact('post_group'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function update(Request $request)
    {
        $post_group = Post_Group::find($request->id);
        $post_group->update([
            'name' => $request->name,
        ]);
        $view = view('admin.post-groups.show', compact('post_group'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function delete(Request $request)
    {
        $post_group = Post_Group::find($request->id);
        $post_group->delete();
        return response()->json([
            'message' => '<div class="col-md-6 alert alert-success"> Xóa thành công! </div>',
        ]);
    }
}
