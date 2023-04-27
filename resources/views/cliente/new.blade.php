<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Comuna</title>
</head>

<body>
    <div class="container">
        <h1>agregar cliente</h1>
        <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="id" class="form-label">id cliente</label>
    <input type="text" class="form-control" id="id_cliente" aria-describedby="idHelp" name="id_cliente" disabled="disabled">

  </div>
  <div class="mb-3">
    <label for="name" class="form-label">nommbre empleado</label>
    <input type="text" class="form-control" id="nom_empleado" ria-describedby="nameHelp" name="nom_empleado" placeholder="Nombre de empleado">
  </div>
  <div class="mb-3">
    <label for="doctor" class="form-label">nombre cliente</label>
    <input type="text" class="form-control" id="nom_cliente" ria-describedby="doctorHelp" name="nom_cliente" placeholder="Nombre del cliente">
  </div>
  <div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" ria-describedby="fehcaHelp" name="fecha" placeholder="Ingrese fecha">
  </div>
  <br>
  <button class="btn btn-primary">Agregar</button>
  <a href="{{ route('cliente.index') }}">Regresar</a>
   </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
