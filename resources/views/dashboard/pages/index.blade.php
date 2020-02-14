@extends('dashboard.layouts.master')
@section('content')
    <!-- Page Content -->
    <h1 style="text-decoration:underline;text-decoration-style: double;  text-decoration-color: red;
color:#323C68;font-family:Serif"class="text-center">Lastest oF Posts</h1>
    <br>
<style>
            .table-hover tbody tr:hover,
            .table-hover tbody tr:hover td,
            .table-hover tbody tr:hover th{
              background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);

            }

</style>


<table  class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User</th>
      <th scope="col">Email</th>
      <th scope="col">is_admin</th>
      <th scope="col">Category</th>
      <th scope="col">Title</th>

    </tr>
  </thead>
  <tbody>
  
@foreach($post as $post)
     <tr>
       <th scope="row">{{$post->id}}</th>

       <td scopr="row">{{$post->user->name}}</td>
    
       <td scopr="row">{{$post->user->email}}</td>
    
       <td scopr="row">{{$post->user->is_admin}}</td>
    
       <td scopr="row">{{$post->category->name}}</td>

       <td scopr="row">{{$post->title}}</td>
       <td>
       <a href="{{ route('posts.show',$post->id) }}" style="color: white"><button type="button" class="btn btn-info">Show</button></a>
       </td>
     
     </tr>
    @endforeach
        </tbody>
    </table>

@endsection()