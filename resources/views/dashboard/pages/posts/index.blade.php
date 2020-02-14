@extends('dashboard.layouts.master')
@section('content')
<!-- Page Content -->
<h1 style="text-decoration:underline;text-decoration-style: double;  text-decoration-color: red;
color:#323C68;font-family:Serif" class="text-center">Number oF Posts : {{$post->count()}}</h1>
<br>
<style>
  .table-hover tbody tr:hover,
  .table-hover tbody tr:hover td,
  .table-hover tbody tr:hover th {
    background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);

  }
</style>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>

    @foreach($post as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td scopr="row">{{$post->title}}</td>
      <td scopr="row">{{$post->body}}</td>
      <td scopr="row">{{$post->photo}}</td>
      <td>
        <a href="{{ route('posts.show',$post->id) }}" style="color: white"><button type="button" class="btn btn-info">Show</button></a>
      </td>
      <td>
        <form action="{{route('posts.destroy',$post->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" style="color: white">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection()