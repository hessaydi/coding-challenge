@extends('layouts.app')
@section('title')
    My preferred Shop
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <a class="p-3" >My preferred Shop</a>
        <a class="p-3" href="{{ route('home') }}">Nearby Shops</a>
    </div>
    <div class="card-deck mb-3 text-center">
        @foreach (Auth::user()->likedPosts as $post)
            <div class="card mb-4 shadow-sm">

                <div class="card-header">
                    <h4 class="my-1 font-weight-normal">{{ $post->title }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title text-muted"><small>You liked this shop !</small> </h1>

                    <a role="button" class="btn btn-lg  btn-outline-danger" href="{{ route('post.like', $post->id) }}">Dislike</a>

                </div>

            </div>
        @endforeach
    </div>

</div>
@endsection
