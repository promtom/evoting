<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Calon;
use App\Models\User;
use DataTables;

class WinController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        // datatabel??
        $calon = Calon::all();
        $user = User::all();
        // dd($calon);
        return view('konten.hasil.index', compact('calon'), compact('user'));
    }

    public function create() {
        return redirect('/home');
    }

    public function store(Request $request) {
        return redirect('/home');
    }

    public function show($id) {
        return redirect('/home');
    }
    public function edit($id) {
        return redirect('/home');
    }

    public function update(Request $request, $id) {
        return redirect('/home');
    }

    public function destroy($id) {
        return redirect('/home');
    }
}
