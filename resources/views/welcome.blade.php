<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
</head>
<body>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="{{url('registro')}}">Registro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Sobre Nosotros</a>
  </li>
    </ul>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellido</th>
          <th scope="col">Edad</th>
          <th scope="col">Peso</th>
          <th scope="col">Altura</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($persona as $p)
          <tr>
            <th scope="row">{{$p->id}}</th>
            <td>{{$p->nombre}}</td>
            <td>{{$p->apellidos}}</td>
            <td>{{$p->edad}}</td>
            <td>{{$p->peso}}</td>
            <td>{{$p->altura}}</td>
            <td>
              <a href="{{url('edit'. $p->id)}}">Editar</a>
              <a href="{{url('eliminar'. $p->id)}}">Borrar</a>
            </td>
          </tr>
        @endforeach
    </table>
</body>
</html>