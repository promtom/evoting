@extends('layouts.main')

@section('title', 'Calon')
@section('animeted', 'swing')
@section('subtitle', 'List Calon')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">calon List</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('calon.create')}}" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus"></i> add calon
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="tabel1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Visi Misi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(@$calon && $calon->count())
                                        @foreach ($calon as $item)
                                        <tr>
                                            <td  width="8%">{{$loop->iteration}}</td>
                                            <td>{{$item->nama_cln}}</td>
                                            <td>{{$item->visimisi}}</td>
                                            {{-- <td>{{$item->foto}}</td> --}}
                                            <td width="17%">
                                                <div class="pull-right">
                                                    <a href="{{route('calon.show', $item->id)}}" title="detail" class="btn btn-outline-dark btn-sm">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>
                                                    <a href="{{route('calon.edit', $item->id)}}" title="edit" class="btn btn-outline-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{route('calon.destroy', $item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Really want delete?')";>
                                                        @method('delete') @csrf
                                                        <button title= "delete" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">Dont have any data</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                        
                        