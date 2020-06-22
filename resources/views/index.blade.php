@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            Full Name
                        </div>
                        <div class="cell">
                            Age
                        </div>
                        <div class="cell">
                            Job Title
                        </div>
                        <div class="cell">
                            Location
                        </div>
                    </div>
                    @foreach($array as $arra)
                        @foreach($arra as $arr)
                        <div class="row">

                            <div class="cell" data-title="Full Name">
                                <p>{{ $arr[0] }}</p>
                            </div>
                            <div class="cell" data-title="Age">
                                <p>{{ $arr[1] }}</p>
                            </div>
                            <div class="cell" data-title="Job Title">
                                <p>{{ $arr[2] }}</p>
                            </div>
                            <div class="cell" data-title="Location">
                                <p>{{ $arr[3] }}</p>
                            </div>

                        </div>
                        @endforeach
                    @endforeach
                </div>

        </div>
    </div>
</div>
<div class="sharethis-inline-share-buttons"></div>

@endsection


{{-- @foreach($array as $arra)
<div>
    @foreach($arra as $arr)
        <div class="row">
            <div class="cell" data-title="Full Name">
                <p>{{ $arr[0] }}</p>
            </div>
            <div class="cell" data-title="Username">
                <p>{{ $arr[1] }}</p>
            </div>
            <div class="cell" data-title="Email">
                <p>{{ $arr[2] }}</p>
            </div>
            <div class="cell" data-title="Total Points">
                <p>{{ $arr[3] }}</p>
            </div>
        </div>
    @endforeach
</div>
@endforeach --}}
