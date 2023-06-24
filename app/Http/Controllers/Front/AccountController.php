<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Order\OrderServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $orderService;
    public function __construct(UserRepositoryInterface $userService,
    OrderServiceInterface  $orderService)
    {
        $this->userService=$userService;
        $this->orderService=$orderService;
    }

    public function login(){
        return view('front.account.login');
    }
    public function checkLogin(Request $request){
        $credentials =[
            'email'=>$request->email,
            'password'=>$request->password,
            'level'=>Constant::user_level_client, //tk cho khach hang bình thường

        ];
        // dd($credentials);
        $remember =$request->remember;


        if(Auth::attempt($credentials, $remember)){
//            return redirect('');//back home
            return redirect()->intended(''); //mac dinh la trang chu

        }else{
            return back()->with('notification','Đăng nhập thất bại: Tài khoản hoặc mật khẩu bị sai.');
        }
    }
    public function logout(){
        Auth::logout();

        return back();
    }

    public function register(){
        return view('front.account.register');
    }
    public function postRegister(Request $request){
        if ($request -> password != $request->password_confirmation){
            return back()
                ->with('notification','Mật khẩu không trung khớp');
        }
        $data =[
            'name'=>$request->name,
            'email' => $request->email,
            'password' => bcrypt($request-> password),//ma hoa mk
            'level'=>Constant::user_level_client, //dki tk cap : kh binh thuong
        ];
        $this-> userService->create($data);
        return redirect('account/login')
            ->with('notification','Đăng kí thành công! Vui lòng đăng nhập.');
    }

    public function myOrderIndex(){
        $orders = $this ->orderService->getOrderByUserId(Auth::id());
        return view('front.account.my-order.index', compact('orders'));
    }
    public function myOrderShow($id){
        $order = $this ->orderService->find($id);
        return view('front.account.my-order.show', compact('order'));
    }
}
