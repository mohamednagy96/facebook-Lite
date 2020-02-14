@extends('dashboard.layouts.master')

@section('content')
    <!-- Page Content -->

    <h1>Show {{$user->name}}</h1>

<table class="table">
    <tr>
      <th scope="col">ID</th>
      <th scope="row">{{$user->id}}</th>
    </tr>
    <tr>
      <td scope="col">Name</td>
      <td scopr="row">{{$user->name}}</td>
      </tr>
      <tr>
      <td scope="row">Email</td>
      <td scope="row">{{$user->email}}</td>
    </tr>
    <tr>

 <td scope="row">Admin & User</td>
 @if($user->is_admin == 1)
      <td> Admin</td>
      @else
      <td >User</td>
 @endif
 </tr>
    <tr>
      <td scope="row">Created_at</td>
      <td scope="row">{{$user->created_at->diffForHumans()}} </td>
      </tr>
      
    </table>

    <hr>

    <br>


    <table>
      <h3 class="text-center" style="text-decoration: underline;color:#015352" >user posts</h3>
      <!-- <ul> -->

    <ul>
      <li style="font-weight:bold;text-decoration: underline">
  
     Number of Posts : {{$user->posts->count()}}</li></ul>
      @if($user->posts->count() == 0)
     <li style="list-style-type: square;color:red"> Not Post yet </li>
     @else
      @foreach($user->posts as $post)
     <ol> 
      <li>
      {{ $post->title }}
      </li>
     
      @endforeach
      @endif
    </ol>
 
     

      </table>
    <a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:50%;margin-left:22%;margin-top:2%">Back</button></a>

@endsection()