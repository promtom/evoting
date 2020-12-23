@extends('layouts.main')

@section('status', 'User')
@section('animeted', 'swing')
@section('substatus', 'Edit Data User')

@section('content')
    <div class="page-inner mt-2">
         <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <div class="card-title">Edit User</div>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('user.index')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.update', $user->id)}}" method="POST"> 
                                @method('patch') @csrf
                                <div class="form-group mb-3">
                                    <div class="row-sm-3">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row-sm-3">
                                        <label for="status">Status</label>
                                    </div>
                                    <div class="row-sm-9">
                                        <select class="form-control" name="status" id="status" required>
                                            <option disabled selected>Pilih Status User</option>
                                            <option value="0">Peserta</option>
                                            <option value="1">Admin</option>
                                        </select>
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
                        
                        