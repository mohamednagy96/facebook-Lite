<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <script src="https://kit.fontawesome.com/64ce9c4676.js" crossorigin="anonymous"></script> -->
  <title>Posts</title>
  <style>



  </style>
</head>

<body style="margin-top:10%;background:#FBFBFB">




  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <h1 style="font-family:serif;text-decoration:underline double white;color:black">Make a New Comment</h1>

    <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse pull-right" id="navbarNavDropdown">
      <ul class="navbar-nav pull-right ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('users.index')}}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="{{route('users.create')}}">Create New Post</a>
        </li>


        <li class="nav-item dropdown pull-right">
          <a class="nav-link dropdown-toggle pull-right " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span style="color:white"> Category </span>
          </a>
          <div class="dropdown-menu pull-right" style="left: -3rem" aria-labelledby="navbarDropdown">

            @foreach($cat as $cat)
            <a class="dropdown-item" value="{{$cat->id}}" href="{{route('cat.search',$cat->id)}}"> {{$cat->name}}</a>
            <div class="dropdown-divider"></div>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle pull-right" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
            {{auth()->user()->name}}
          </a>
          <div class="dropdown-menu" style="left: -3rem" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('profile.index')}}">Profile</a>
            <div class="dropdown-divider"></div>



            <a class="dropdown-item" href="{{route('profile.edit',auth()->user()->id)}}"> Setting</a>
            <div class="dropdown-divider"></div>
            <form action="{{route('logout')}}" method="post" style="margin-right:-2px">
              @csrf
              <button type="submit" style="width:100%">LOGOUT</button>
            </form>
          </div>
        </li>
    </div>
  </nav>

<form action="" method="post">
@csrf
<div style="background:red">{{$post->title}}</div>
<div style="background:yellow">{{$post->body}}</div>
<div style="background:orange">
@foreach($post->comments as $comment)
<hr>
{{$comment->body}}
<hr>
@endforeach
</div>
<div style="background:white">
<input type="text" name="comment">
<button type="submit">Save</button> 
</div>
<form>
</body>
</html>
