@extends('layouts.main')

@section('title', 'user')
@section('animeted', 'swing')
@section('subtitle', 'List User')

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
                            <div class="card-title">List User</div>
                        </div>
                        <div class="pull-right">
                            <a href="{{route('user.create')}}" class="btn btn-success btn-sm">
                                <i class="fas fa-plus"></i> add user
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tabel1">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Vote</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(@$user && $user->count())
                                    @foreach ($user as $item)
                                    <tr>
                                        <td width="8%">{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            @if($item->status == 1) Admin
                                            @else Peserta
                                            @endif
                                        </td>
                                        <td>
                                            @if(@$item->vote) {{$item->vote}}
                                            @else golput
                                            @endif
                                        </td>
                                        <td width="17%">
                                            <div class="pull-right">
                                                <a href="{{route('user.edit', $item->id)}}" title="edit"
                                                    class="btn btn-outline-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{route('user.destroy', $item->id)}}" method="POST"
                                                    class="d-inline" onsubmit="return confirm('Really want delete?')" ;>
                                                    @method('delete') @csrf
                                                    <button title="delete" class="btn btn-outline-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                                {{-- <a href="" >
                                                        
                                                    </a> --}}
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