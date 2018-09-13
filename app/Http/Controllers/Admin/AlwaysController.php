<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Always;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AlwaysController extends CommonController
{

    public function tab()
    {
        return view('admin.always.tab');
    }   

    public function list()
    {
        
        return view('admin.always.list');
    }

    public function add()
    {
        return view('admin.always.add');
    }

   
    public function element()
    {
       
        return view('admin.always.element');
    }

    public function img()
    {
        return view('admin.always.img');
    }

}
