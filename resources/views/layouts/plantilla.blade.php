<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>

</html>
    <!-- As a link -->
  
 
  
  <!-- As a heading -->
  
  <nav class="" style="background-color: #c4c4c4;">
    <!-- Navbar content -->
  
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('convenios.index')}}">Index - Listado</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('convenios.create')}}">Nuevo Convenio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Consultar Convenio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Editar Convenio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">MENU</a>
    </li>
  </ul>
</nav>
</head>
<body>
  <div class="shadow-lg p-3 mb-5 bg-body rounded"></div>
  
  
  <div class="container">
    <div class="abs-center">

   @yield('content')
    </div>
  </div>

</body>
</html>