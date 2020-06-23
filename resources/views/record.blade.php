@extends('layouts.app')

@section('title', "Record")
    
@section('meta')
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ env('APP_URL') }}"/>

    <!--  Social tags    -->
    <meta name="keywords" content="leaderboard, scores, ranking">

    <meta name="description" content="Look for {{ $full_name }} ({{ $username }})'s awesome rank of {{ $rank }} on the leaderboard!">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $full_name }}'s Leaderboard Results - Rank {{ $rank }}">
    <meta itemprop="description" content="Look for {{ $full_name }} ({{ $username }})'s awesome rank of {{ $rank }} on the leaderboard!">

    <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
    <!-- Twitter Card data -->

    <!-- <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim"> -->
    <meta name="twitter:title" content="{{ $full_name }}'s Leaderboard Results - Rank {{ $rank }}">

    <meta name="twitter:description" content="Look for {{ $full_name }} ({{ $username }})'s awesome rank of {{ $rank }} on the leaderboard!">
    <!-- <meta name="twitter:creator" content="@creativetim"> -->
    <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
    <meta name="twitter:data1" content="{{ $full_name }}'s Leaderboard Results - Rank {{ $rank }}">
    <!-- <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="Free">
    <meta name="twitter:label2" content="Price"> -->

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $full_name }}'s Leaderboard Results - Rank {{ $rank }}" />
    <!-- <meta property="og:type" content="article" /> -->
    <meta property="og:url" content="https://wenzhixin.github.io/fresh-bootstrap-table/compact-table.html" />
    <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg"/>
    <meta property="og:description" content="Look for {{ $full_name }} ({{ $username }})'s awesome rank of {{ $rank }} on the leaderboard!" />
    <meta property="og:site_name" content="Creative Tim" />
@endsection

@section('content')

<div class="wrapper">

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="description">
              <a href = "{{ url('/') }}"><i class = "fa fa-long-arrow-alt-left"></i> &nbsp;Back</a>
          </div>

          <div class="fresh-table  toolbar-color-azure">
          <!--
            Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
          -->
              
              <table class = "table">
                  <thead>
                      <th>Field</th>
                      <th>Value</th>
                  </thead>
                  <tbody class = "@if($rank == 1) gold @elseif($rank == 2) silver @elseif($rank == 3) bronze @endif">
                      <tr>
                          <td>Rank</td>
                          <td>{{ $rank }}</td>
                      </tr>
                      <tr>
                          <td>Full Name</td>
                          <td>{{ $full_name ?? '' }}</td>
                      </tr>
                      <tr>
                          <td>Username</td>
                          <td>{{ $username ?? '' }}</td>
                      </tr>
                      <tr>
                          <td>Email</td>
                          <td>{{ $email ?? '' }}</td>
                      </tr>
                      <tr>
                          <td>Total Points</td>
                          <td>{{ $total_points }}</td>
                      </tr>
                  </tbody>
              </table>
          </div>

            {{-- <p>Copyright &copy; 2019 <a href="http://creative-tim.com">Creative Tim</a>, made with <i class="fa fa-heart ct-heart"></i> for a better web.</p> --}}
          </div>
        </div>
      </div>
</div>



@endsection