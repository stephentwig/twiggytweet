@extends('layouts.app')

@section('content')

    <div class="lg:flex">
        <div class="lg:m-1/6 lg:mx-10">
            @include ('_sidebar-links')
        </div>


        <div class="flex-1">
            @include ('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                @include('tweet')

                @include('tweet')
                @include('tweet')
                @include('tweet')
                
            </div>
        </div>


        <div  class="lg:m-1/6  lg:mx-10">
            @include ('_friends-list')
        </div>
    </div>



@endsection



