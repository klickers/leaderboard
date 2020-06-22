@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @foreach($array as $arra)
        <div>
            @foreach($arra as $arr)
                <div>
                    <p>{{ $arr[0] }}</p>
                    <p>{{ $arr[1] }}</p>
                    <p>{{ $arr[2] }}</p>
                    <p>{{ $arr[3] }}</p>
                </div>
            @endforeach
        </div>
    @endforeach

@endsection