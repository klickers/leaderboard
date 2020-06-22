@extends('layouts.app')

@section('title', 'Home')

@section('content')

@php
$count = 0;
$rowclass = 'grey';
@endphp

<div class="wrapper">

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="description">
          </div>

          <div class="fresh-table  toolbar-color-azure">
          <!--
            Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
          -->

            <table id="fresh-table" class="table">
              <thead>
                <th data-field="full_name" data-sortable="true">Name</th>
                <th data-field="username" data-sortable="true">username</th>
                <th data-field="email" data-sortable="true">Email</th>
                <th data-field="total_points" data-sortable="true">Total Points</th>
                <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
              </thead>
              <tbody>
                @foreach($array as $arra)
                @foreach($arra as $arr)
                    <tr>
                    <td>{{ $arr["full_name"] }}</td>
                    <td>{{ $arr["username"] }}</td>
                    <td>{{ $arr["email"] }}</td>
                    <td>{{ $arr["total_points"] }}</td>
                    <td></td>
                    </tr>
                    @endforeach
                    @endforeach
              </tbody>
            </table>
          </div>

            {{-- <p>Copyright &copy; 2019 <a href="http://creative-tim.com">Creative Tim</a>, made with <i class="fa fa-heart ct-heart"></i> for a better web.</p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
