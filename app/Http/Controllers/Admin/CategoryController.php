<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function show(Request $request)
    {
        $category = Category::find($request->id);
        $view = view('admin.categories.show', compact('category'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
       $category = Category::create(['name' => $request->name]);
       if ($category) {
           return redirect()->route('admin.categories.index')->with('success', 'Thêm mới thành công');
       }
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $category = Category::find($request->id);
        $view = view('admin.categories.edit', compact('category'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function update(CategoryRequest $request)
    {
        $category = Category::find($request->id);
        $category->update([
            'name' => $request->name,
        ]);
        $view = view('admin.categories.show', compact('category'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return response()->json([
            'message' => '<div class="col-md-6 alert alert-success"> Xóa thành công! </div>',
        ]);
    }
}
