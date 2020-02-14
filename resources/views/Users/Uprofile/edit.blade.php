

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body style="background:#FBFBFB">

<div class="container text-center p-0" style="font-family:serif;border-bottom-right-radius:5px;border-bottom-left-radius:5px;height:15%;width:100%;padding-top:13px;color:white;background:black"> 
      <h1 class="text-center" style="padding-top:2%"> Edit Profile</h1>
      <br>
      <br>
<form action="{{route('profile.update',auth()->user()->id)}}" class="text-left" method="POST" enctype="multipart/form-data">
@csrf
@method("PUT")
<div class="form-col" style="width:80%;margin-left:7%;color:black" >
<div class="form-group row-md-6" style="margin-left:50px">
  <label for="user">User Name</label>
  <input type="text"  name="name" id="user" class="form-control" value="{{auth()->user()->name}}"  >
</div>

<div class="form-col" style="margin-left:50px">
  <div class="form-group row-md-6">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{$user->email}}"class="form-control" id="email">
  </div>
  
  <div class="form-group row-md-6">
    <label for="pass">New Password</label>
    <input type="password" name="password"  class="form-control" id="pass">
  </div>

  <div class="form-group row-md-6">
  <label for="file">Profile Picture</label>
  <input type="file" name="propicture" class="form-control" id="file">
</div>
</div>
</div>
<br>
<br>
<div>
<button type="submit"  class="btn btn-primary" style="width:10%;margin-right:40%;float:right">Save</button>
</form>
<a href="{{ url()->previous() }}"><button class="btn btn-dark" style="color:white;width:10%;float:left;margin-left:35%">Back</button></a>
</div>



</body>
