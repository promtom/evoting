<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use DataTables;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        // datatabel??
        $user = User::all();
        // dd($user);
        return view('konten.user.index', compact('user'));
    }

    public function create(){
        return view('konten.user.add');
    }

    public function store(Request $request) {
        $data = $request->only([
            'name',
            'email',
            'password',
            'status'
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => $data['status']
        ]);
        return redirect('/user')->withSuccess('Data has been add :3');
    }

    public function show($id) {
        return redirect('/home');
    }
    public function edit($id) {
        $user = User::find($id);
        return view('konten.user.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        if($user) {
            $data = $request->only([
                'name',
                'status'
            ]);
            $user = User::where('id', $id)->update($data);
        }
        return redirect('/user')->withSuccess('Data has been update :3');
    }

    public function destroy($id) {
        $user = User::where('id', $id)->delete();
        return redirect('/user')->withSuccess('Data has been delete :3');
    }
}
