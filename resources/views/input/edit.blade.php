<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MyPortfolio Site')</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    


<body style="background: #cfcfcf;">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/input">Assignments</a>
      </li>
       <li class="nav-item">
        <a class="nav-link float-right" href="/admin">Admin</a>
      </li>
    </ul>
  </div>
</nav>




<div class="container">


    <div class="card" style="margin-top: 20px;">
            <div class="card-body">
              <h3>Edit Assignment</h3>
              <div class="card">
     <div class="card-header">
      
    <form method="POST" action="{{route('input.update', $input->id)}}">

          @method('PATCH')


          <div class="form-group">
              @csrf
              <label for="name">Voornaam</label>
              <input type="text" class="form-control" name="firstname" value="{{$input->firstname}}" />
          </div>
          <div class="form-group">
              <label for="price">Achternaam</label>
              <input type="text" class="form-control" name="lastname" value="{{$input->lastname}}" />
          </div>
          <div class="form-group">
              <label for="price">Titel</label>
              <input type="text" class="form-control" name="title" value="{{$input->title}}" />
          </div>
          <div class="form-group">
              <label for="price">Beschrijving</label>
              <input type="text" class="form-control" name="description" value="{{$input->description}}" />
          </div>
          <button type="submit" class="btn btn-primary float-right">Wijzigen</button>
      </form>




        </div>
      </div>
    </div>
  </div>
</div>



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

</html>



