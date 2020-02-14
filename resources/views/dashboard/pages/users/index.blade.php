@extends('dashboard.layouts.master')

@section('content')
    <!-- Page Content -->
    <h1 style="text-decoration:underline;text-decoration-style: double;  text-decoration-color: red;
color:#323C68;font-family:Serif" class="text-center" >Users</h1>
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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
   @foreach($user as $user)
     <tr>
       <th scope="row">{{$user->id}}</th>
       <td scopr="row">{{$user->name}}</td>
       <td scopr="row">{{$user->email}}</td>
       <td>
       <a href="{{ route('user.show',$user->id) }}" style="color: white"><button type="button" class="btn btn-info">Show</button></a>
       </td>
       <td>
            <form action="{{route('user.destroy',$user->id)}}" method="POST">
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
