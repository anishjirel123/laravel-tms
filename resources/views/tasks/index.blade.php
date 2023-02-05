<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Title</title>
  <script src="https://kit.fontawesome.com/ecd7f2ff6f.js" crossorigin="anonymous"></script>
  @notifyCss
</head>
<body>
  <x:notify-messages/>
  <div class="d-grid gap-2 py-3">
    <button class="btn btn-warning fs-4 " type="button">Index Tasks</button>
  </div>
<div class="container py-2">
  <a name="" id="" class="btn btn-primary" href="{{route('task.create')}}" role="button">Add Tasks</a>
</div>
  <table class="table btn-dark border-white">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
        <td><img src="/uploads/{{$task->img}}" width="100" height="100" alt=""></td>
        <td>
        <a name="" id="" class="btn btn-primary btn-sm" href="{{route('task.edit', $task->id)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
        <a name="" id="" class="btn btn-success btn-sm" href="{{route('task.show', $task->id)}}" role="button"><i class="fa-solid fa-users-viewfinder"></i></a>
    <!-- Modal trigger button -->
    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
      <i class="fa-solid fa-trash"></i>
    </button>
    
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="color: black; font-weight:700">
           Are you sure delete the file?
          </div>  
          <div class="modal-footer">
          <form action="{{route('task.destroy', $task->id)}}" method="POST" enctype="multipart/form-data">
            @method('DELETE') 
            @csrf
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
          </form>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Optional: Place to the bottom of scripts -->
    <script>
      const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    
    </script>
    

          </td>

      </tr>
        
      @endforeach
     
    </table>
  </tbody>
  <div class="d-flex align-items-center justify-content-center fs-4">
    {{$tasks->links()}}
  </div>



















  {{-- <table class=" table-hover table-bordered table-sm table-responsive-sm">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Title</th>
        <th scope="col">Descrption</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($tasks as $task)
    <tr>
     <th scope="row">{{$loop->iteration}}</th>
     <td>{{$task->title }}</td>
     <td>{{$task->description}} </td>
     <td>
     <a href="{{route('task.edit', $task->id)}}" class="btn-primary">Edit </a>
    <a href="" class="btn-success">View</a>
    <a href="{{route('task.destor', $task->id)}}" class="btn-danger">Delete</a>
     </td>
   </tr>
    @endforeach

    </tbody>
  </table> --}}
  <script src="https://kit.fontawesome.com/ecd7f2ff6f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  @notifyJs
</body>
</html>