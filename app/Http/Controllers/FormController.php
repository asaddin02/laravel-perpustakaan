<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $user = User::all();
        return view('form',compact(['user']));
    }

    public function create(){
        $kelas = Kelas::all();
        return view('create',compact(['kelas']));
    }

    public function store(Request $request){
        // dd($request->all());
        User::create($request->except('_token','submit'));
        return redirect('/form');
    }

    public function edit($id){
        $user = User::find($id);
        $kelas = Kelas::all();
        return view('edit',compact(['user','kelas']));
    }

    public function update($id, Request $request){
        $user = User::find($id);
        $user->update($request->except('_token','submit'));
        return redirect('/form');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/form');
    }
}
