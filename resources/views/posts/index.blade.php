@extends('layouts.app')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    @foreach($posts as $post)

        <div class="row mb-5 ">
            <div class="col-8 offset-2 border border-grey rounded bg-white">
                <div class="d-flex align-items-center px-5 pt-5">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" alt=""
                             class="rounded-circle w-100"
                             style="max-width: 50px;">
                    </div>
                    <div class="d-flex">
                        <div class="pr-3">
                            <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark font-weight-bold">
                                {{$post->user->username}}
                            </span>
                            </a>

                        </div>

                        <div>
                            <span class="text-secondary">
                                {{$post->created_at->format('d-m-Y')}}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="px-5 border-bottom">
                    <p class="pl-5">
                        {{$post->caption}}
                    </p>

                </div>

                <div class="p-5 ">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </div>
            </div>
        </div>



    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links() }}
        </div>
    </div>
</div>
@endsection
