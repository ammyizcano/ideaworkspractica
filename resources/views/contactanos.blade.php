<!DOCTYPE html>
<html>
<head>
    <title>Ideaworks Formulario</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
     FORMULARIO DE CONTACTOS
    </div>
    <div class="card-body">
      <form name="contactanos-formularios" id="contactanos-formularios" method="post" action="{{url('guardar-formulario')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Correo</label>
          <input type="text" id="correo" name="correo" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Telefono</label>
          <input type="text" id="telefono" name="telefono" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Mensaje</label>
          <textarea name="mensaje" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>    
</body>
</html>