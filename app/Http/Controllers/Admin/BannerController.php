<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use App\Banner;
class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function show(Request $request)
    {
        $banner = Banner::find($request->id);
        $view = view('admin.banners.show', compact('banner'))->render();
        return response()->json([
            'view' => $view,
        ]);
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(BannerRequest $request)
    {
        $image = '';
        if ( $request->hasFile('image') ) {
            $file = $request->file('image');
            $nameImage = $file->getClientOriginalName();
            $image = time()."_".$nameImage;
            while (file_exists('images/uploads/banners/'.$image)) {
                $image = time()."_".$nameImage;
            }
            $file->move("images/uploads/banners", $image);
        }

        $banner = Banner::create([
            'image' => $image,
            'type'  => $request->type,
        ]);
        if ($banner) {
            return redirect()->route('admin.banners.index');
        }
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $banner = Banner::find($request->id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $image_banner = $banner->image;
        if ( $request->hasFile('image' )) {
            $file = $request->file('image');
            $nameImage = $file->getClientOriginalName();
            $image = time()."_".$nameImage;
            while (file_exists('images/uploads/banners/'.$image)) {
                $image = time()."_".$nameImage;
            }    
            $file->move("images/uploads/banners", $image);
            $image_banner = $image;
        } 
        $banner->update([
            'image' => $image_banner,
            'type'  => $request->type,
        ]);

        return redirect()->route('admin.banners.index')->with('success','Cập nhật thành công');
    }

    public function delete(Request $request)
    {
        $banner = Banner::find($request->id);
        $banner->delete();
        return response()->json([
            'message' => '<div class="col-md-6 alert alert-success"> Xóa thành công! </div>',
        ]);
    }
}
