@extends('layouts.main')

@section('title', 'Calon')
@section('animeted', 'swing')
@section('subtitle', 'Edit Data Calon')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Edit Calon</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('calon.index')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('calon.update', $calon->id)}}" method="POST" enctype="multipart/form-data"> 
                                @method('patch') @csrf
                                <div class="form-group mb-3">
                                    <div class="">
                                        <img src="{{asset('img/calon/'.$calon->foto)}}" style="width: 25%; height: 25%">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row-sm-2">
                                        <label for="foto">Foto</label>
                                    </div>
                                    <div class="row-sm-10">
                                        <input type="file" class="form-control" name="foto" id ="foto">
                                    </div>
                                    {{-- <div class="row-sm-2">
                                        <label for="foto">Foto</label>
                                    </div>
                                    <div class="row-sm-10">
                                        <textarea class="form-control" name="foto" id="foto" placeholder="Type here" required>{{$calon->foto}}</textarea>
                                    </div> --}}
                                </div>
                                
                                <div class="form-group mb-3">
                                    <div class="row-sm-3">
                                        <label for="nama_cln">Nama</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <input type="text" class="form-control" name="nama_cln" id="nama_cln" placeholder="Type here" value="{{$calon->nama_cln}}" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row-sm-2">
                                        <label for="visimisi">Visi Misi</label>
                                    </div>
                                    <div class="row-sm-10">
                                        <textarea class="form-control" name="visimisi" id="visimisi" placeholder="Type here" required>{{$calon->visimisi}}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right" name="add" id="add">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                        
                        