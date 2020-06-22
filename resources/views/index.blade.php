@extends('layouts.app')

@section('title', 'Home')

@section('content')

@php
$count = 0;
$rowclass = 'grey';
@endphp

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
                <div class="table">

                    <div class="row header">
                        <div class="cell">
                            Full Name
                        </div>
                        <div class="cell">
                            Username
                        </div>
                        <div class="cell">
                            Email
                        </div>
                        <div class="cell">
                            Points
                        </div>
                    </div>
                    @foreach($array as $arra)
                        @foreach($arra as $arr)
                        @if($count <= 2)
                            <div class="row" style="background-color:#ffcccc">
                        @else
                            <div class="row">
                        @endif
                                <div class="cell" data-title="Full Name">
                                    <p>{{ $arr["full_name"] }}</p>
                                </div>
                                <div class="cell" data-title="Age">
                                    <p>{{ $arr["username"] }}</p>
                                </div>
                                <div class="cell" data-title="Job Title">
                                    <p>{{ $arr["email"] }}</p>
                                </div>
                                <div class="cell" data-title="Location">
                                    <p>{{ $arr["total_points"] }}</p>
                                </div>
                                @php
                                $count = $count + 1
                                @endphp

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
