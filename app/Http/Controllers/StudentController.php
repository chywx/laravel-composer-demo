<?php

namespace App\Http\Controllers;

use App\Events\InviteUserEvent;
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

    public function insert1(){
        $insert = DB::insert('insert into student (username,age) values (?,?)', ['wx', 23]);
        var_dump($insert);
    }

    public function event1(){
        var_dump("event1");
        $event = event(new InviteUserEvent(1, "dahai"));
        var_dump($event);
    }



}
