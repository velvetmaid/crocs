@extends('layouts.app')

@section('content')
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Crocs') }}
    </a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('uartist')}}">Artist</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('ufan')}}">Fan</a>
        </li>
    </ul>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-3xl">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection