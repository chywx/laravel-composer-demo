<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function test1(){
        var_dump(123);
    }

    public function test2(){
        return "test2";
    }

    public function select1(){
        $select
            = DB::select("select * from student");
        var_dump($select);
    }



}