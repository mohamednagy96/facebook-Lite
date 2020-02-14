@extends('dashboard.layouts.master')

@section('content')
    <!-- Page Content -->

    <h1>Edit Category</h1>

    <hr   />


<form action="{{route('categories.update',$cat->id)}}" method="POST">

@method('PUT')
@csrf
<div class="form-group">
    <label for="Admin">Admin</label>
    <input type="text"  name="n_admin" id="des" class="form-control" value="{{auth()->user()->name}}" readonly >
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $cat->name }}" class="form-control">
</div>

<div class="form-group">
    <label for="des">Description</label>
    <input type="text" name="description" id="des" value="{{$cat->description}}" class="form-control">
</div>

<div class="form-group">
        <button type="submit"  class="btn btn-success" style="color:white;width:30%;float:right">Update</button>
    </div>
</form>


<a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:20%;float:left">Back</button></a>

@endsection
