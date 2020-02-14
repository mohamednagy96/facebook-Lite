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




<!-- ----------------------------------------------------------- ---->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">

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
          <a class="nav-link dropdown-toggle pull-right "  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span style="color:white"> Category </span>
          </a>
          <div class="dropdown-menu pull-right" style="left: -3rem"aria-labelledby="navbarDropdown">

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


            <a class="dropdown-item" href="{{route('profile.edit',auth()->user()->id)}}">Setting</a>
            <div class="dropdown-divider"></div>
            <form action="{{route('logout')}}" method="post" style="margin-right:-2px">
              @csrf
              <button type="submit" style="width:100%">LOGOUT</button>
            </form>
          </div>
        </li>
    </div>
  </nav>

<!-- ------------------------------------------------------------ -->

<body  style="margin-top:10%;background:#FBFBFB">

  @foreach($post as $post)
  @if(!$post->photo == null)
  <div class="row border border-dark" style="width:60%;margin-left:20%;border-top-right-radius:5px;border-top-left-radius:5px">
  <div class="col-md-12 border border-dark" style="background:#EDEDED;font-family:serif;display:inline-block">
  <a style="float:left" href="{{route('pro.show',$post->user_id)}}">{{$post->user->name}}</a></div>

<div class="col-md-12 border border-dark" style="background:#F9F8F8;font-family:serif;display:inline-block">
        <h4 style="float:left">{{$post->title}}</h4>
      <span style="float:right;padding-top:1%">{{$post->created_at->diffForhumans()}}</span>
    </div>
    <div class="col-md-3 p-0 border border-dark" style="background:white;border-bottom-left-radius:5px">
      <img class="col-sm-12 p-0 border border-dark" id="preview" src="{{asset('/images/'.$post->photo)}}" style="width:25rem;height:15rem" alt="...">

    </div>
    <div class="col-md-9 border border-dark" style="background:white;;border-bottom-right-radius:5px">
      <h6>{{$post->body}}</h6>
      <br>
      <br>
    </div>
  </div>
<br>
<br>
@else
<div class="row border border-dark" style="width:60%;margin-left:20%;border-top-right-radius:5px;border-top-left-radius:5px">
  <div class="col-md-12 border border-dark" style="background:#EDEDED;font-family:serif;display:inline-block">
  <a style="float:left" href="{{route('pro.show',$post->user_id)}}">{{$post->user->name}}</a></div>

<div class="col-md-12 border border-dark" style="background:#F9F8F8;font-family:serif;display:inline-block">
        <h4 style="float:left">{{$post->title}}</h4>
      <span style="float:right;padding-top:1%">{{$post->created_at->diffForhumans()}}</span>
    </div>

    <div class="col-md-12 border border-dark" style="background:white;;border-bottom-right-radius:5px">
      <h6>{{$post->body}}</h6>
      <br>
      <br>
    </div>
  </div>
<br>
<br>
@endif
  @endforeach



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>