<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Calon;
use App\Models\User;
use DataTables;

class VoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // datatabel??
        $calon = Calon::all();
        // dd($calon);
        return view('konten.vote.index', compact('calon'));
    }

    public function create() {
        return redirect('/home');
    }

    public function store(Request $request) {
        return redirect('/home');
    }

    public function show($id) {
        $calon = Calon::find($id);
        return view('konten.vote.show', compact('calon'));
    }
    public function edit($id) {
        return redirect('/home');
    }

    public function update(Request $request, $id) {
        // $calon = Calon::find($vote);
        $user = User::find($id);
        if($user) {
            $data = $request->only([
                'vote'
            ]);
            $user = User::where('id', $id)->update($data);
        }
        // $user = User::find(Auth::user()->id);
        // dd($calon);
        return redirect('/vote')->withSuccess('Terima kasih sudah vote :3');
    }

    public function destroy($id) {
        return redirect('/home');
    }
}
