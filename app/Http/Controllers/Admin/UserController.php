<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\EditAdminRequest;
use App\Http\Requests\ChangePasswordAdminRequest;
use Auth;
use App\User;

class UserController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = Auth::guard('admin');
    }

    /* display list user admin */

    public function index()
    {
        $user = User::where('role','!=', 0)->get();
        return view('admin.users.index', compact('user'));
    }
    /* create one user admin */
    public function create() {
        $user=$this->auth->user();
        if($user->cant('create',$user)){
            return redirect()->back()->withErrors(['rpErrorCreate'=>'done']);
        }
        return view('admin.users.create');
    }

    public function store(CreateAdminRequest $request)
    {
        User::create([
            'full_name' => $request->full_name,
            'email'     => $request->email,
            'password'  => $request->password,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'role'      => 1
        ]);

        return redirect()->back()->with('success', 'Tạo tài khoản thành công!');
    }
    /* show profile user */
    public function show()
    {
        $user = User::findOrFail($this->auth->user()->id);
        return view('admin.admin-users.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.admin-users.edit', compact('user'));
    }

    public function update(EditAdminRequest $request, $id)
    {
       $user = User::find($id);
       $user->update([
            'full_name' => $request->full_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'address'   => $request->address
       ]);
       return redirect()->back()->with('success', 'Cập nhật thông tin tài khoản thành công!');
    }

    public function getChangePassword($id)
    {
        $user = User::find($id);
        return view('admin.admin-users.change-password', compact('user'));
    }
    
    public function postChangePassword(ChangePasswordAdminRequest $request, $id)
    {
        $user = User::find($id);
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => bcrypt($request->password)
            ]);
            return redirect()->back()->with('success', 'Đổi mật khẩu thành công!');
        } else {
            return redirect()->back()->with('fail', 'Mật khẩu cũ không đúng!');
        }
        
    }
}
