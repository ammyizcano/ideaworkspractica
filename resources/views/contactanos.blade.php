<!DOCTYPE html>
<html>
<head>
  
    <title>Ideaworks Formulario</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    @notifyCss
</head>
<body>
 
  <div class="contact_form">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="formulario">    
      <h1>Formulario de Contactos</h1>
        <h3>Escríbenos e ingresa tus datos:</h3>


          <form action="{{url('guardar-formulario')}}" method="POST">       
          @csrf
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio"></span>
                  </label>
                    <input type="text" name="nombre" id="nombre" required placeholder="Escribe tu nombre">
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Email
                    <span class="obligatorio"></span>
                  </label>
                    <input type="email" name="correo" id="email" required placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="telefone" class="colocar_telefono">Teléfono
                  </label>
                    <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>    
              
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio"></span>
                  </label>                     
                                    <textarea name="mensaje" class="texto_mensaje" id="mensaje" placeholder="Deja aquí tu comentario..."></textarea> 
                                </p>                    
              
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>         
                
          </form>
    </div>  
  </div>  
  
  @notifyJs  
  <x:notify-messages />
</body>
</html>