@extends('dashboard.layouts.master')

@section('content')
    <!-- Page Content -->
    <h1>Show : {{$post->title}}</h1>

<table class="table">
    <tr>
      <th scope="col">ID</th>
      <th scope="row">{{$post->id}}</th>
    </tr>
    <tr>
      <td scope="col">Name</td>
      <td scopr="row">{{$post->title}}</td>
      </tr>
      <tr>
      <td scope="row">category</td>
      <td scope="row">{{$post->category->name}} </td>
      </tr>
      <tr>
      <td scope="row">Created_by</td>
      <td scope="row">{{$post->user->name}} </td>
      </tr>
      <tr>
      <td scope="row">Body</td>
      <td scope="row">{{$post->body}}</td>
    </tr>
    <tr>

    <tr>
      <td scope="row">Photo</td>
      <td scope="row">{{$post->photo}}</td>
    </tr>
   
    <tr>
      <td scope="row">Created_at</td>
      <td scope="row">{{$post->created_at->diffForHumans()}} </td>
      </tr>


      </table>

      <form action="{{route('dashboard.destroy',$post->id)}}" method="POST" style="float:left;width:30%">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" style="color:white;width:100%">Delete</button>
        </form>   
         <a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:30%;float:right">Back</button></a>

@endsection()