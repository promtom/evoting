<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Calon;
use DataTables;

class CalonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // datatabel??
        $calon = Calon::all();
        // dd($calon);
        return view('konten.calon.index', compact('calon'));
    }

    public function create() {
        return view('konten.calon.add');
    }

    public function store(Request $request) {
        $request->validate([
            'foto' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);
        $foto = $request->file('foto');
        $nameFoto = md5(time()) . '.'.$foto->getClientOriginalExtension();
        $foto->move(public_path('img/calon'), $nameFoto);
        $data = new calon;
            $data->nama_cln = $request->nama_cln;
            $data->visimisi = $request->visimisi;
            $data->foto = $nameFoto;
        $data->save();
        return redirect('/calon')->withSuccess('Data has been add :3');
    }

    public function show($id) {
        $calon = Calon::find($id);
        return view('konten.calon.show', compact('calon'));
    }
    public function edit($id) {
        $calon = Calon::find($id);
        return view('konten.calon.edit', compact('calon'));
    }

    public function update(Request $request, $id) {
        $calon = Calon::find($id);
        $calon->nama_cln = $request->nama_cln;
        $calon->visimisi = $request->visimisi;

        if($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $foto->move(public_path('img/calon'), $calon->foto);
        }
        else{
            $photo = $calon->foto;
        }
        // $calon->foto = $nameFoto;
        $calon->save();
        // dd($foto->getClientOriginalName());
        return redirect('/calon')->withSuccess('Data has been add :3');
    }

    public function destroy($id) {
        $calon = Calon::where('id', $id)->delete();
        return redirect('/calon')->withSuccess('Data has been delete :3');
    }
}
