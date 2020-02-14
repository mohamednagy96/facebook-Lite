@extends('dashboard.layouts.master')

@section('content')
    <!-- Page Content -->
    <h1>Category of {{$cat->name}}</h1>

<table class="table">
    <tr>
      <th scope="col">ID</th>
      <th scope="row">{{$cat->id}}</th>
    </tr>
    <tr>
      <td scope="col">Name</td>
      <td scopr="row">{{$cat->name}}</td>
      </tr>
      <tr>
      <td scopr="row">Description</td>
      <td scopr="row">{{$cat->description}}</td>
    </tr>
    <tr>
    <tr>
      <td scopr="row">Created By</td>
      <td scopr="row">{{$cat->n_admin}}</td>
      </tr>
      <td scopr="row">Created_at  Updated_at</td>
      <td scopr="row">{{$cat->created_at->diffForHumans()}}
      <br>
      {{$cat->updated_at->diffForHumans()}}
      </td>
      </tr>
     

    </table>
    <a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:50%;margin-left:22%;margin-top:2%">Back</button></a>

@endsection()