@extends('layouts.app')
@section('title')
    Main Page
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-row-reverse bd-highlight mb-3">
            <a class="p-3" href="{{ route('main') }}" >My preferred Shop</a>
            <a class="p-3" >Nearby Shops</a>
        </div>
        <div class="card-deck mb-3 text-center">
            @foreach ($posts as $post)
                <div class="card mb-4 shadow-sm">

                        <div class="card-header">
                            <h4 class="my-1 font-weight-normal">{{ $post->title }}</h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-unstyled mt-3 mb-4">
                                @foreach ($post->likes as $user)
                                    <li>{{ $user->name }} likes this !</li>
                                @endforeach
                            </ul>
                            @if ($post->isLiked)
                                <a role="button" class="btn btn-lg  btn-outline-danger" href="{{ route('post.like', $post->id) }}">Dislike</a>
                                <a role="button" class="btn btn-lg btn-success disabled " href="{{ route('post.like', $post->id) }}">
                                    Like </a><i class="fa fa-thumbs-up fa-2x">{{ $post->likes()->count() }}</i>
                            @else
                                <a role="button" class="btn btn-lg  btn-danger disabled" href="{{ route('post.like', $post->id) }}">Dislike</a>
                                <a role="button" class="btn btn-lg btn-success" href="{{ route('post.like', $post->id) }}">
                                    Like</a><i class="fa fa-thumbs-up fa-2x">{{ $post->likes()->count() }}</i>
                            @endif
                        </div>

                </div>
            @endforeach
        </div>
    </div>

@endsection