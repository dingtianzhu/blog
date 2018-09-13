<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
class IndexController extends CommonController
{
    public function index(){
        return view('admin.index');
    }
    public function info(){
        return view('admin.info');
    }
    public function setpass(){

        $input = Input::all();
        if(count($input)>1){
            $rules=[
                'password'=>'required|between:6,20|confirmed',
            ];
            $msg=[
                'password.required'=>'新密码不能为空',
                'password.between'=>'新密码必须在6-20位之间',
                'password.confirmed'=>'两次密码不一致',
            ];
            $validator=Validator::make($input,$rules,$msg);
            if($validator->passes()){
                $user=User::first();
                $_password=Crypt::deCrypt($user->user_pass);
                if($input['password_o']==$_password){
                    $user->user_pass = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors','password edit success');
                }else{
                    return back()->with('errors','原密码错误');
                }

            }else{
                return back()->withErrors($validator);
            }
        }else{
            return view('admin.setpass');
        }
    }
}
