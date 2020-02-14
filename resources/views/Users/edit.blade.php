<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body style="background:#FBFBFB">

  <div class="container text-center" style="background:black;font-family:serif;border-radius:5px;height:10%;padding-top:13px;color:white;width:60%">
    <h1> Edit Post</h1>
    <form action="{{route('users.update',$post->id)}}" class="text-left" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-col" style="width:80%;margin-left:7%;color:black">


        <div class="form-col" style="margin-left:50px">
          <div class="form-group row-md-6">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title">
          </div>

          <div class="form-group row-md-6">
            <label for="body">Body</label>
            <textarea type="text" name="body" class="form-control" id="body">{{$post->body}}</textarea>
          </div>


          <div class="form-group row-md-6">
            <label for="cat">Category</label>
            <select id="cat" name="cate_id" class="form-control" required>
              @foreach($cats as $cat)
              <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group row-md-6">
            <label for="file">Example file input</label>
            <input type="file" name="photo" class="form-control" id="file" required>
          </div>
        </div>


      </div>


      <button type="submit" class="btn btn-primary" style="width:15%;float:right;margin-right:23%">Post</button>
    </form>
    <a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:15%">Back</button></a>

</body>