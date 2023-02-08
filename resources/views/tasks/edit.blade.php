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
    <div class="card-header text-center fs-4 py-4">Edit Form</div>
    <button type="button" class="btn btn-success"><a href="{{route('task.index')}}"></a>Tasks Index</button>
    
    <div class="card-body text-secondary">
      
      <form class="row g-3 needs-validation " method="POST" action="{{ route('task.update',$tasks->id) }}" enctype="multipart/form-data" novalidate >
      @method('PUT')
      @csrf 
    <div class="col-md-6">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" name="title" class="form-control" id="validationCustom01" value="{{$tasks->title}}" required>
    </div>
    
    <div class="col-md-6">
      <label for="validationCustom02" class="form-label">Decription</label>
      <input type="text" name="description" class="form-control" id="validationCustom02" value="{{$tasks->description}}" required>
    </div>

    <div class="col-md-6">
      <label for="validationCustom02" class="form-label">Image</label>
      <input type="file" name="img" class="form-control" id="validationCustom02" value="{{$tasks->img}}" required>
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