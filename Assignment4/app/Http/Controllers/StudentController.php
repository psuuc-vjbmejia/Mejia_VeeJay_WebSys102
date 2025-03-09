<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{

    public function insert(Request $request)
    {
        $name = $request->input('stud_name');
        DB::insert('insert into student (name) values (?)', [$name]);
        return Redirect('stud_view');
    }

    public function index()
    {
        $user = DB::select('select * from student');
        return view('stud_view', ['users' => $user]);
    }
    public function show($id)
    {
        $user = DB::select('select * from student where id = ?', [$id]);
        return view('stud_update', ['users' => $user]);
    }
    public function edit(Request $request, $id)
    {
        $name = $request->input('stud_name');
        DB::update('update student set name = ? where id = ?', [$name, $id]);
        echo "Record updated successfully </br>";
        return Redirect('stud_view');
    }

    public function delete($id)
    {
        DB::delete('delete from student where id=?', [$id]);;
        return Redirect('stud_view');
    }
}