@extends('layouts.main')

@section('title', 'Vote')
@section('animeted', 'bounce')
@section('subtitle', 'Vote')

@section('content')
<div class="page-inner mt-2">
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if(@$calon && $calon->count())
                @if(Auth::user()->vote) 
                    <div class="jumbotron">
                        <h1 class="display-4">Anda sudah vote</h1>
                        <p class="lead">JIka anda lupa, anda vote siapa. Itulah manusia</p>
                    </div>
                @else
                    @foreach ($calon as $item)
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-header backvote">
                                    <div class="profile-picture">
                                        <div class="avatar avatar-xl">
                                            <img src="{{asset('img/calon/'.$item->foto)}}" alt="Gambar Calon"
                                                class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile text-center">
                                        <div class="name">{{$item->nama_cln}}</div>
                                        <div class="view-profile">
                                            <a href="{{route('vote.show', $item->id)}}" class="btn btn-primary btn-block mb-2">
                                                <i class="fas fa-info mr-2"></i>Detail
                                            </a>
                                            <form action="{{route('vote.update', Auth::user()->id)}}" method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin mau vote dia?');">
                                                @method('patch') @csrf

                                                <input type="hidden" class="form-control" name="vote" id="vote"
                                                    value="{{$item->id}}">
                                                <button class="btn btn-info btn-block mb-2">
                                                    <i class="fas fa-check mr-2"></i>Pilih
                                                </button>
                                            </form>
                                            {{-- <form action="{{route('vote.update', $item->id)}}" method="POST" class="d-inline"
                                            onsubmit="return validatevote()">
                                            @method('patch') @csrf
                                            <button class="btn btn-info btn-block mb-2">
                                                <i class="fas fa-check mr-2"></i>vote
                                            </button>
                                            </form> --}}
                                            {{-- <a href="{{url('vote/'.$item->id)}}" class="btn btn-info btn-block" id="btn-vote">
                                            <i class="fas fa-check mr-2"></i>Vote
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @else
                <div class="jumbotron">
                    <h1 class="display-4">Gak ada Calon</h1>
                    <p class="lead">Silahkan tanya admin</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection