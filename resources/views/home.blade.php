@extends('layouts.main')

@section('title', 'Dashboard')
@section('animeted', 'jello')
@section('subtitle', 'Dashboard')

@section('content')
    <div class="page-inner mt-2">
        <!-- 
        <div class="row mt--2">
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Overall statistics</div>
                        <div class="card-category">Daily information about statistics in system</div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-1"></div>
                                <h6 class="fw-bold mt-3 mb-0">New Users</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-2"></div>
                                <h6 class="fw-bold mt-3 mb-0">Sales</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-3"></div>
                                <h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         -->
         <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Dashboard</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Hi fellow Member  &hearts;, Welcome to the {{ config('app.name', 'Laravel') }}</p>
                        <ol type="1">
                            <li>This App is Make For Character Planner</li>
                            <li>Menu List  = Data of your Characters</li>
                            <li>Menu Class = Data of Class (ex: saber, guard, fire, etc.)</li>
                            <li>Make sure atleast 1 class before add some character</li>
                            <li>Suggestion? = Send some word to developer via email</li>
                        </ol>
                        <p>Let Build Your Own Character</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
