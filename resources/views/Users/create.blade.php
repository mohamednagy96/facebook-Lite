
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body style="background:#FBFBFB">


  <div class="container text-center" style="font-family:serif;border-bottom-right-radius:5px;border-bottom-left-radius:5px;height:15%;width:60%;padding-top:2%;color:white;background:black"> 
        <h1> Make a New Post</h1>
  </div>
  <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" style="width:50%;margin-left:23%">
@csrf

  <div class="form-col" style="margin-left:50px">
    <div class="form-group row-md-6">
      <label for="title">Title</label>
      <input type="text" name="title" placeholder="Title" class="form-control" id="title" required>
    </div>
    <div class="form-group row-md-6">
      <label for="body">Body</label>
      <textarea type="text" name="body" placeholder="Body" class="form-control" id="body" required></textarea>
    </div>
  

    <div class="form-group row-md-6">
      <label for="cat">Category</label>
      <select id="cat" name="cate_id" class="form-control" required>
        @foreach($cat as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option> 
        @endforeach
      </select>
    </div>


    <div class="form-group row-md-6">
    <label for="exampleFormControlFile1">Photo oF Post</label>
    <input type="file" name="photo" class="form-control" id="exampleFormControlFile1">
  </div>
  </div>
    
  
</div>
  <button type="submit"  class="btn btn-primary" style="width:20%;margin-right:25%;float:right">Post</button>
</form>
<a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:10%;float:left;margin-left:35%">Back</button></a>

</tbody>