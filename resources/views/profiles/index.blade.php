@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pb-5">
            <div class="col-3">
                <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
            </div>
            <div class="col-9 pl-5 pt-4">
                <div class="d-flex justify-content-between align-items-baseline pb-4">
                    <div class="d-flex align-content-center">
                        <h1>{{$user->username}}</h1>

                      <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{$postCount}}</strong></div>
                    <div class="pr-5"><strong>{{$followersCount}} </strong>followers</div>
                    <div class="pr-5"><strong>{{$followingCount}} </strong>following</div>
                </div>
                <div class="pt-4 pb-4">
                    <strong>{{$user->profile->title}}</strong>
                </div>
                <div class="pt-3">
                    {{$user->profile->description}}
                </div>
                <div class="pt-2"><a href="https://www.freecodecamp.org">{{$user->profile->url}}</a></div>
            </div>
        </div>
        <div class="row">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}"> <img src="/storage/{{$post->image}}" class="w-100"></a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
