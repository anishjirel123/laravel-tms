<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Title</title>
</head>
<body>
  
  <div class="card border-primary mb-3 py-5" >
    <div class="card-header text-center fs-5">Create Form</div>
    <a name="" id="" class="btn btn-primary" href="{{route('task.index')}}" role="button">Tasks Index</a>
    <div class="card-body text-secondary">
      
      <form class="row g-3 needs-validation " method="POST" action="{{ route('task.store') }}" enctype="multipart/form-data" novalidate >
      
      @csrf 
    <div class="col-md-6">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" name="title" class="form-control" id="validationCustom01" placeholder="Enter the name..." required>
        {{-- @error('title')
        <p class="form-text text-danger fs-6 text-center">
          {{$message}}
        </p>
        @enderror --}}
    </div>
    <div class="col-md-6">
      <label for="validationCustom02" class="form-label">Decription</label>
      <input type="text" name="description" class="form-control" id="validationCustom02" placeholder="Enter the description..." required>
    </div>

    <div class="col-md-6">
      <label for="validationCustom02" class="form-label">Image</label>
      <input type="file" name="img" class="form-control" id="validationCustom02" required>
    </div>
  
    <div class="col-12">
      <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
    </div>
  </form>
  
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>











