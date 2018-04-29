<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function index()
    {

        $data=[

            'name'=>'qyw',
            'age'=>'20',
            'null',null

        ];
        return view("user",$data);

      /*  #测试mysql连接是否正常
        $DataBasename=DB::connection()->getDatabaseName();
        return view("user",compact('DataBasename'));*/




    }
}
