@extends('layouts.app')

@section('title', 'Home')

@section('meta')
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ env('APP_URL') }}"/>

    <!--  Social tags    -->
    <meta name="keywords" content="leaderboard, points, game">

    <meta name="description" content="Look up scores on the leaderboard!">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Leaderboard Results">
    <meta itemprop="description" content="Look up scores on the leaderboard!">

    <meta itemprop="image" content="https://i.ibb.co/2jT9CpH/hngleaderboard.jpg">
    <!-- Twitter Card data -->

    <!-- <meta name="twitter:card" content="product"> -->
    <!-- <meta name="twitter:site" content="@creativetim"> -->
    <meta name="twitter:title" content="Leaderboard Results">

    <meta name="twitter:description" content="Look up scores on the leaderboard!">
    <!-- <meta name="twitter:creator" content="@creativetim"> -->
    <meta name="twitter:image" content="https://i.ibb.co/2jT9CpH/hngleaderboard.jpg">
    <meta name="twitter:data1" content="Leaderboard Results">

    <!-- Open Graph data -->
    <meta property="og:title" content="Leaderboard Results" />
    <!-- <meta property="og:type" content="article" /> -->
    <meta property="og:url" content="https://github.com/klickers/leaderboard" />
    <meta property="og:image" content="https://i.ibb.co/2jT9CpH/hngleaderboard.jpg"/>
    <meta property="og:description" content="Look up scores on the leaderboard!" />
    <meta property="og:site_name" content="Leaderboard Results" />
@endsection

@section('content')

@php
    $count = 0;
    $rowclass = 'grey';
    $rankCount = 1;
    $currentPoints = $array[0][0]["total_points"];
@endphp

<div class="wrapper">

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="description">
              <h1>HNG Leaderboard</h1>
              <p><a href = "https://github.com/klickers/leaderboard" target = "_blank"><i class = "fab fa-github"></i> &nbsp;Github</a>&nbsp; | &nbsp;<a href = "https://lucid.blog/solar4ars_1/post/hng-leaderboard-9d2" target = "_blank"><i class = "fa fa-layer-group"></i> &nbsp;Lucid Post</a></p>
          </div>

          <div class="fresh-table  toolbar-color-azure">
          <!--
            Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
          -->

            <table id="fresh-table" class="table">
              <thead>
                <th data-field="rank" data-sortable="true">Rank</th>
                <th data-field="full_name" data-sortable="true">Name</th>
                <th data-field="username" data-sortable="true">Username</th>
                <th data-field="email" data-sortable="true">Email</th>
                <th data-field="total_points" data-sortable="true">Total Points</th>
                <th data-field="actions">Share</th> <!-- data-formatter="operateFormatter" data-events="operateEvents" -->
              </thead>
              <tbody>
                @foreach($array[0] as $arr)
                    @php
                        //if ($arr[0] > 3 && $currentPoints > $arr["total_points"])
                        //{
                        //    $rankCount += 1;
                        //}
                        //array_unshift($arr, $rankCount);
                    @endphp
                    @if($arr[0] > 3)
                        <tr>
                            <td>{{ $arr[0] }}</td>
                            <td>{{ $arr["full_name"] }}</td>
                            <td>{{ $arr["username"] }}</td>
                            <td>{{ $arr["email"] }}</td>
                            <td>{{ $arr["total_points"] }}</td>
                            <td>
                                <a rel="tooltip" title="Share" href='{{ url("/" . $arr["username"]) }}' title="Share">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @elseif($arr[0] == 3)
                        <tr class = "bronze">
                            <td>{{ $arr[0] }}</td>
                            <td>{{ $arr["full_name"] }}</td>
                            <td>{{ $arr["username"] }}</td>
                            <td>{{ $arr["email"] }}</td>
                            <td>{{ $arr["total_points"] }}</td>
                            <td>
                                <a rel="tooltip" title="Share" href='{{ url("/" . $arr["username"]) }}' title="Share">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @elseif($arr[0] == 2)
                        <tr class = "silver">
                            <td>{{ $arr[0] }}</td>
                            <td>{{ $arr["full_name"] }}</td>
                            <td>{{ $arr["username"] }}</td>
                            <td>{{ $arr["email"] }}</td>
                            <td>{{ $arr["total_points"] }}</td>
                            <td>
                                <a rel="tooltip" title="Share" href='{{ url("/" . $arr["username"]) }}' title="Share">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @elseif($arr[0] == 1)
                        <tr class = "gold">
                            <td>{{ $arr[0] }}</td>
                            <td>{{ $arr["full_name"] }}</td>
                            <td>{{ $arr["username"] }}</td>
                            <td>{{ $arr["email"] }}</td>
                            <td>{{ $arr["total_points"] }}</td>
                            <td>
                                <a rel="tooltip" title="Share" href='{{ url("/" . $arr["username"]) }}' title="Share">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endif
                    @php
                        //if ($currentPoints > $arr["total_points"] && $rankCount < 4)
                        //{
                        //    $rankCount += 1;
                        //}
                        //$currentPoints = $arr["total_points"];
                    @endphp
                @endforeach
              </tbody>
            </table>
          </div>

            {{-- <p>Copyright &copy; 2019 <a href="http://creative-tim.com">Creative Tim</a>, made with <i class="fa fa-heart ct-heart"></i> for a better web.</p> --}}
          </div>
        </div>
      </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $(tr).addClass('cala');
    });
</script>
@endsection
