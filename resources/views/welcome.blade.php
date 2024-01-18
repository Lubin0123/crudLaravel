<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
<h1 class="text-center p-3">Crud BiciMotos</h1>

<div class="p-5 table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-white">
          <tr>
            <th scope="col">idProductos</th>
            <th scope="col">Descripcion Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">cantidad</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="table-group-dividier">
            {{-- en el foreach recibo la variable $datos que estoy enviando desde el controller --}}
            @foreach ($datos as $item)

                <tr>

                    <td>{{$item->idProductos}}</td>
                    <td>{{$item->descripcionProductos}}</td>
                    <td><b>$</b>{{$item->precioProductos}}</td>
                    <td>{{$item->cantidadProductos}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>

                     </td>

                </tr>

            @endforeach

        </tbody>
      </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
