@extends('layouts.main')

@section('title', 'hasil')
@section('animeted', 'bounce')
@section('subtitle', 'hasil')

@section('content')

<?php $i = 0; ?>

<div class="page-inner mt-2">
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if(Auth::user()->vote) 
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
                                        {{-- PROSES HITUNG --}}
                                        @foreach ($user as $vote)
                                            @if($item->id==$vote->vote) 
                                                <?php $i++; ?>
                                            @endif
                                        @endforeach
                                        <p class="angka"> <?= $i; ?> </p>
                                        {{-- Balikin Nilai --}}
                                        <?php $i = 0; ?> 
                                        VOTES
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="jumbotron">
                    <h1 class="display-4">Belum Voting</h1>
                    <p class="lead">Silahkan Vote dulu</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection