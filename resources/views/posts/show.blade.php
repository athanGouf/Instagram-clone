@extends('layouts.app')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>

        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{$post->user->profile->profileImage()}}" alt=""
                         class="rounded-circle w-100"
                        style="max-width: 50px;">
                </div>
                <div class="d-flex align-items-center">
                    <div >
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark font-weight-bold">
                                {{$post->user->username}}
                            </span>
                        </a>

                    </div>
                    @can('update', $post->user->profile)
                        <div class="ml-3">
                            <form action="/delete/{{$post->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger">Delete Post</button>
                            </form>

                        </div>
                    @endcan
                </div>
            </div>
            <hr>

            <p>
                <a href="/profile/{{$post->user->id}}" class="pr-2">
                    <span class="text-dark font-weight-bold">

                        {{$post->user->username}}
                    </span>
                </a>

                {{$post->caption}}
            </p>
        </div>
    </div>
</div>
@endsection
