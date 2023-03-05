<h4>Eliminar Persona</h4>
<form action="{{url('destroy'. $person->id)}}" method="POST">
    @csrf
    @method('delete')
    <div class="input-group mb-12">
        <span class="input-group-text">Nombre</span>
        <input type="text" name="nombre" value="{{$person->nombre}}" class="form-control" placeholder="Ingresa tu Nombre">
    </div>
    <br>
    <div class="input-group mb-12">
        <span class="input-group-text">Apellido</span>
        <input type="text" name="apellidos" value="{{$person->apellidos}}" class="form-control" placeholder="Ingresa tu Apellido">
    </div>
    <br>
    <div class="input-group mb-12">
        <span class="input-group-text">Edad</span>
        <input type="number" name= "edad" value="{{$person->edad}}" class="form-control" placeholder="Ingresa tu Edad">
    </div>
    <br>
    <div class="input-group mb-12">
        <span class="input-group-text">Peso</span>
        <input type="number" name="peso" step="0.01" value="{{$person->peso}}" class="form-control" placeholder="Ingresa tu Peso">
    </div>
    <br>
    <div class="input-group mb-12">
        <span class="input-group-text">Altura</span>
        <input type="number" step="0.01" name="altura" value="{{$person->altura}}" class="form-control" placeholder="Ingresa tu Altura">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Eliminar</button>
</form>