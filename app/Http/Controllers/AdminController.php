<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        // $students = Student::all(); 
        // $students = Student::orderBy('id', 'Desc')->get(); 
        $students = Admin::orderBy('id', 'Desc')->Paginate(10);
        return view('home', ['students' => $students]);
    }

    public function store(Request $request){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:admins',
            'address' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:1999'
        ]);
        // setting the path to for the image folder
        $image = $request->file('image')->store('public/uploads/students');
        
        // dd($form_data);
        $student = new Admin();
        $student ->firstname = $request->firstname;
        $student ->lastname = $request->lastname;
        $student ->email = $request->email;
        $student ->image = $image;
        $student ->address = $request->address;
        $student->save();

        return redirect('/index');
    }
    public function images($id){
        $student = Admin::find($id);
        return view('view', ['student' => $student]);
    }

    public function create(){
        return view('create');
    }
    
    public function edit($id){
        $student = Admin::find($id);
        return view('edit', ['student' => $student]);
    }

    public function update(Request $request, $id){
        $student = Admin::find($id);
        $student->update([
       'firstname' => $request->firstname,
       'lastname' =>$request->lastname,
       'email' => $request->email,
       'address' => $request->address,
       'image' => $request->image
        ]);

        return redirect('/home');
    }

    public function delete($id){
        $student = Admin::destroy($id);
        return redirect('index');
    }
}