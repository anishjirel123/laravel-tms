<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Title</title>
</head>
<body style="background-color:lightblue;">
  
  <div class="container py-5">
  <div class="card" style="border-radius:20px; border:2px solid black;">
    <div class="card-header text-center fs-3 border border-primary" style="border-radius:20px; font-weight:700; word-spacing:5px; text-shadow: 2px 2px lightgreen">
      Create Form
    </div>
    <div class="task-index py-4 pt-3">
      <a name="" id="" class="btn btn-danger" href="{{route('task.index')}}" role="button"><i class="fa-solid fa-arrow-left"></i></a>
      <a name="" id="" class="btn btn-success" href="" role="button" style="font-weight:600">Go To Index Tasks Management Table</a>
    </div>
    <div class="card-body">
      <form class="row g-3 needs-validation " method="POST" action="{{ route('task.store') }}" enctype="multipart/form-data" novalidate >
      
        @csrf 
      <div class="col-md-6" style="font-weight:700">
        <label for="validationCustom01" class="form-label"><i class="fa-solid fa-user"></i> First name</label>
        <input type="text" name="title" class="form-control" id="validationCustom01" placeholder="Enter the name..." required>
          @error('title')
          <p class="form-text text-danger fs-6 ">
            {{$message}}
          </p>
          @enderror
      </div>
      <div class="col-md-6" style="font-weight:700">
        <label for="validationCustom02" class="form-label"> <i class="fa-solid fa-message"></i> Decription</label>
        <input type="text" name="description" class="form-control" id="validationCustom02" placeholder="Enter the description..." required>
        @error('description')
        <p class="form-text text-danger fs-6 ">
          {{$message}}
        </p>
        @enderror
      </div>
  
  
      <div class="col-md-6" style="font-weight:700">
        <label for="validationCustom02" class="form-label"><i class="fa-solid fa-image"></i>  Image</label>
        <input type="file" name="img" class="form-control" id="validationCustom02" required>
        @error('img')
        <p class="form-text text-danger fs-6 ">
          {{$message}}
        </p>
        @enderror
  
      </div>
       
      <div class="col-12 py-4" >
        <button class="btn btn-primary" name="submit" type="submit" >Submit form <i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </form>
  

    </div>
  </div>
</div>
<script src="https://kit.fontawesome.com/ecd7f2ff6f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>




































































































































































































