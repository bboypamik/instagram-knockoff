@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-4">
                    <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" alt="" class="w-100"></a>
                </div>
            </div>
        <div class="row pt-2 pb-4">

        </div>
                <div class="col-6 offset-3">
                    <div>


                        <p> <span class="font-weight-bold"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>
                            {{$post->caption}}</p>
                    </div>

                </div>
                @endforeach
        <div class="row-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
        </div>

@endsection
