


    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Posts</title>
    <style>



    table.table-bordered thead tr th{
  border:10px solid red;
}

</style>
  </head>
  <body class="bg-dark" style="border-radius:20px">


  
  <table class="table table-hover bg-light" style="margin-top:5%;margin-left:22%;width:50%;border-radius:20px"> 
  <thead>
    <tr>
    <th scope="col">Created_by</th>
    <th scope="col">{{$post->user->name}}</th>
  </tr>
      <tr><th scope="col">ID</th>
      <td>{{$post->id}}</td>
      </tr>

      <tr>
        <th scope="col">title</th>
        <td>{{$post->title}}</td>

      </tr>
      <tr><th scope="col">Category</th>
      <td>{{$post->category->name}}</td>
    </tr>
      <tr><th scope="col">Body</th>
      <td>{{$post->body}}</td>

    </tr>
      <tr><th scope="col">Photo</th>
      <td>  <img src='{{asset("images/".$post->photo)}}' class="card-img-top" alt="..." style="width:20%"> </td>
    </tr>
      <tr><th scope="col" >Created_at</th>
      <td>{{$post->created_at->diffForHumans()}}</td>

    </tr>
    </tr>

</table>



    <a href="{{url('/users')}}"><button class="btn btn-primary" style="color:white;width:50%;margin-left:22%;margin-top:2%">Back</button></a>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


