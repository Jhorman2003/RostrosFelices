<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>List</title>
</head>

<body>
    <div class="container">
        <h1>lista</h1>
        <a href="{{ route('cliente.create') }}" class="btn btn-success">Agregar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fecha</th>
                    <th scope="col">Nomb_empleado</th>
                    <th scope="col">Nomb_cliente</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id_cliente }}</th>
                        <td>{{ $cliente->fecha }}</td>
                        <td>{{ $cliente->nom_empleado }}</td>
                        <td>{{ $cliente->nom_cliente }}</td>
                        <td>
                        <form action="{{ route('cliente.edit', $cliente->id_cliente) }}" method="GET">
      <button class="btn btn-warning btn-sm">
        <span class="fas fa-user-edit">Editar</span>
      </button>
    </form>
    <td><form action="{{ route('cliente.destroy', $cliente->id_cliente) }}" method="POST" >
    @csrf 
    @method('DELETE')
      <button class="btn btn-danger btn-sm">
        <span class="fas fa-user-edit">Eliminar</span>
      </button>
    </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
