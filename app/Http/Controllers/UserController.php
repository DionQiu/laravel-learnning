<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data=[

            'name'=>'qyw',
            'age'=>'20',
            'null',null

        ];
      /*  #测试mysql连接是否正常
        $name=DB::connection()->getDatabaseName();
        return view("user",compact('name'));*/

         return view("user",$data);

    }
}
