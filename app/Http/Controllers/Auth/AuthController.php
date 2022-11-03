<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class AuthController extends Controller
{
    protected $v, $user;
    public function __construct()
    {
        $this->v = [];
        $this->user  = new User();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('auth.dang-nhap');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     if ($request->isMethod('POST')) {
    //         $email = $request->input('email');
    //         $password = $request->input('password');
    //         if (Auth::attempt(['email' => $email, 'password' => $password, 'trang_thai' => 1])) {

    //             return redirect()->route('route_BE_Admin_Khoa_Hoc');
    //         } else {
    //             dd(123);
    //         }
    //     }
    //     return view('form.login');
    // }
    public function loginForm()
    {
        return view('auth.dang-nhap');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->status == 0) {
                    if ($user->role == 1) {
                        return redirect()->route('route_BE_Admin_Khoa_Hoc');
                    }
                    if ($user->role != 1) {
                        return redirect()->route('client_khoa_hoc');
                    }
                } else {
                    session()->flash('error', 'Tài khoản củ bạn đã bị khóa');
                    return redirect()->route('auth.loginForm');
                }
            }
        } else {
            session()->flash('error', 'Tài khoản mật khẩu không chính xác !');
            return redirect()->route('auth.loginForm');
            // dd('cc');
        }
    }
    public function getdangki()
    {
        return view('auth.dang-ky');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->hinh_anh = 'https://w7.pngwing.com/pngs/754/2/png-transparent-samsung-galaxy-a8-a8-user-login-telephone-avatar-pawn-blue-angle-sphere-thumbnail.png';
        $user = new User();
        $user->fill($request->all());
        // 2. Kiểm tra file và lưu
        $user->password = Hash::make($request->password);
        // 3. Lưu $user vào CSDL
        $user->save();
        session()->flash('success', 'bạn đã đăng kí thành công');
        return redirect()->route('auth.loginForm');
    }
    public function logout(Request $request)
    {
        // xoá session user đã đăng nhập
        Auth::logout();
        // 2 câu lệnh bên dưới có ở laravel 8 và 9
        // Huỷ toàn bộ session đi
        $request->session()->invalidate();
        // Tạo token mới
        $request->session()->regenerateToken();
        // Quay về màn login
        return redirect()->route('auth.loginForm');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
