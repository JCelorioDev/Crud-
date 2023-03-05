  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registro</title>
  </head>
  <body>
    <form action="{{url('guardar')}}" method="POST">
        @csrf
        <div class="input-group mb-12">
            <span class="input-group-text">Nombre</span>
            <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu Nombre">
        </div>
        <br>
        <div class="input-group mb-12">
            <span class="input-group-text">Apellido</span>
            <input type="text" name="apellidos" class="form-control" placeholder="Ingresa tu Apellido">
        </div>
        <br>
        <div class="input-group mb-12">
            <span class="input-group-text">Edad</span>
            <input type="number" name= "edad" class="form-control" placeholder="Ingresa tu Edad">
        </div>
        <br>
        <div class="input-group mb-12">
            <span class="input-group-text">Peso</span>
            <input type="number" name="peso" step="0.01" class="form-control" placeholder="Ingresa tu Peso">
        </div>
        <br>
        <div class="input-group mb-12">
            <span class="input-group-text">Altura</span>
            <input type="number" step="0.01" name="altura" class="form-control" placeholder="Ingresa tu Altura">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </body>
  </html>
  