@extends('layouts.app')

@section('content')
<div class="container">
    @if ($profiles)

       @foreach($profiles as $profile)

               <div class="row align-items-baseline p-2 border-bottom">
                   <div class="col-1 offset-1">
                       <img src="{{$profile->profileImage()}}" alt=""
                            class="rounded-circle w-100"
                            style="max-width: 50px;">

                   </div>
                   <div class="col-3">
                       <a href="/profile/{{$profile->id}}">
                        {{$profile->user->name}}
                       </a>

                   </div>
                   <div class="col-3">
                       {{$profile->user->username}}

                   </div>
                   <div class="col-3">
                       {{$profile->user->email}}

                   </div>
               </div>
        @endforeach
    @else
        <div class="row justify-content-center">
            <h1>No users found</h1>
        </div>
    @endif

</div>
@endsection
