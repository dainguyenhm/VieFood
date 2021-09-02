<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoryRequest;
use App\Sub_Category;
use App\Category;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories = Sub_Category::all();
        return view('admin.sub-categories.index', compact('sub_categories'));
    }

    public function show(Request $request)
    {
        $sub_category = Sub_Category::find($request->id);
        $view = view('admin.sub-categories.show', compact('sub_category'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-categories.create', compact('categories'));
    }

    public function store(SubCategoryRequest $request)
    {
        $sub_category = Sub_Category::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);
        if ($sub_category) {
            return redirect()->route('admin.sub-categories.index')->with('success','Thêm mới thành công');
        }
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $sub_category = Sub_Category::find($request->id);
        $old_category = $sub_category->category;
        $categories = Category::all();
        $view = view('admin.sub-categories.edit', compact('sub_category', 'old_category', 'categories'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function update(SubCategoryRequest $request)
    {
        $sub_category = Sub_Category::find($request->id);
        $sub_category->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);
        $view = view('admin.sub-categories.show', compact('sub_category'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function delete(Request $request)
    {
        $sub_category = Sub_Category::find($request->id);
        $sub_category->delete();
        return response()->json([
            'message' => '<div class="col-md-6 alert alert-success"> Xóa thành công! </div>',
        ]);
    }
}
