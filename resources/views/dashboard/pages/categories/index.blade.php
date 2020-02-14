@extends('dashboard.layouts.master')
@section('content')
    <!-- Page Content -->
    <h1 style="text-decoration:underline;text-decoration-style: double;  text-decoration-color: red;
color:#323C68;font-family:Serif"class="text-center" >Categories</h1>
    <hr>
    
        <a  href="{{ route('categories.create')  }}" class="btn btn-primary" style="width: 100%">Create New Category</a>
    <hr>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scopr="row">Option</th>
    </tr>
  </thead>
  <tbody>
   @foreach($cat as $cat)
     <tr>
       <th scope="row">{{$cat->id}}</th>
       <td scopr="row">{{$cat->name}}</td>

       <td><a href="{{ route('categories.show',$cat->id) }}" style="color: white"><button type="button" class="btn btn-info">Show</button></a>
       <a href="{{ route('categories.edit',$cat->id) }}" style="color: white"><button type="button" class="btn btn-success">Edit</button></a>
<form action="{{route('categories.destroy',$cat->id)}}" method="POST" style="display:inline-block">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger" style="color: white;display:inline-block">Delete</button>
</form>
       </td>
     </tr>
    @endforeach
        </tbody>
    </table>

@endsection()