@extends('dashboard.layouts.master')

@section('content')
    <!-- Page Content -->

    <h1>Add New Category</h1>

    <hr   />


<form action="{{route('categories.store')}}" method="POST">
@csrf

<div class="form-group">
    <label for="Admin">Admin</label>
    <input type="text"  name="n_admin" id="des" class="form-control" value="{{auth()->user()->name}}" readonly >
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
</div>

<div class="form-group">
    <label for="des">Description</label>
    <input type="text" name="description" id="des" class="form-control" placeholder="Enter Category Description">
</div>

<div class="form-group">
        <button type="submit" class="form-control" style="background:#015352;color:white;width:20%;float:right">Submit</button>
    </div>
</form>

<a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:20%;float:left">Back</button></a>

@endsection
