@extends('layouts.main')

@section('title', 'Show ')
@section('animeted', 'bounce')
@section('subtitle', 'Show')

@section('content')
<div class="page-inner mt-2">
    <div class="container">
        <div class="row mx-2 my-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">
                                Data Calon <b>{{$calon->nama_cln}}</b>
                            </h4>
                            <a href="{{route('vote.index')}}" class="btn btn-secondary btn-sm btn-round ml-auto">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-2 mx-3">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="avatar avatar-xxl">
                                    <img src="{{asset('img/calon/'.$calon->foto)}}" alt="Gambar Calon"
                                        class="avatar-img rounded">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>Biodata Calon</h4>
                                <table>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>{{$calon->nama_cln}}</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-md">
                                <h4>Visi dan Misi</h4>
                                <p>
                                    {{$calon->visimisi}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection