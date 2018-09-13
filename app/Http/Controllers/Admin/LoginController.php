<?php

namespace App\Http\Controllers\Admin;
use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
require_once './Org/Code/Code.class.php';


class LoginController extends CommonController
{
    public function login(){
        $input = Input::all();
        if(count($input)>1){
            $code = new \Code;
            $_code = $code->get();
            if(strtoupper($input['code'])!=$_code){
                return back()->with('msg','验证码错误！');
            }
            $user = User::first();
            if($user->user_name != $input['username'] || Crypt::decrypt($user->user_pass)!= $input['password']){
                return back()->with('msg','用户名或者密码错误！');
            }
            session(['user'=>$user]);
            return redirect('admin/index');
        }else{
            return view('admin/login');
        }
        
    }
    
    public function code(){
        $code = new \Code;
        $code->make();
    }
    
    public function logout(){
        session(['user'=>null]);
        return redirect('admin/login');
    }
}
