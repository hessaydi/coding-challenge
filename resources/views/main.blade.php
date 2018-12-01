@extends('layouts.app')
@section('title', 'Welcome Page')

@section('content')
    <div class="container-fluid">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Welcome</h1>
        <h3 >
            Hello guys, there is the Coding Challenge.I hope you enjoy it.
        </h3>


        <p>
            <a href="{{ route('home') }}" role="button " class="btn btn-success btn-lg my-2">Shops page</a>
        </p>
    </div>
    </div>
@endsection
