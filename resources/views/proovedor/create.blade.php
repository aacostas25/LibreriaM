<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro_Proveedores_MARAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
   <!-- Barra de navegacion -->
   <!-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="imgs/PORTADAS E INFO GNR..png" alt="Logo" width="30" height="24">
      <a class="navbar-brand" href="#">MaracBookworms</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html" title="same dirc link" target="_blank">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos.html" title="same dir link" target="_blank">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html" title="same dir2 link" target="_blank">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="graficos.html" title="same dir3 link" target="_blank">Estadisticas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <header> 
    <div class="p-3 mb-2 bg-danger text-white">
      Registro Proveedores
  </div>
  </header>
 <br>
 <br>
  <h1 style="color: rgb(136, 37, 102); font-size: 60px; text-align: center;"> Registro Proveedores </h1>
  <h2 style="text-align: center"> MARAC</h2>
  <br>
  <br>
  <div class="container text-center">
    <form action="{{route('proovedor.store')}}" method="post">
    @csrf
    <div class="row">
      <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4">
                <div class="formulario-grupo" id="grupo-nombre">
                    <label for="nombre" class="formulario-label"><strong>Nombre del proveedor</strong></label>
                    <div class="formulario-grupo-input">
                        <input type="text" class="formulario-input" name="nombre" id="nombre" placeholder="nombre" 
                        title= "Letras y espacios, pueden llevar acentos." pattern="^[a-zA-ZÀ-ÿ\s]{1,40}$" required>  <!-- onchange() -->
                    </div>
                    <div id="r_nombre"></div>
                    <!-- <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-apellido">
                    <label for="apellido" class="formulario-label"><strong>Apellido</strong></label>
                    <div class="formulario-grupo-input">
                        <input type="text" class="formulario-input" name="apellido" id="apellido" placeholder="apellido" required>
                    </div>
                    <div id="r_apellido"></div>
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-celular">
                  <label for="celular" class="formulario-label"><strong> Celular </strong></label>
                  <div class="formulario-grupo-input">
                      <input type="text" class="formulario-input" name="celular" id="celular" placeholder="celular"
                  pattern="^[0-9]{1,40}$" title="Numeros" required>
                  </div>
                  <div id="r_celular"></div>
              </div>              
              <br>
              <div class="formulario-grupo" id="grupo-nit">
                <label for="nit" class="formulario-label"><strong> NIT </strong></label>
                <div class="formulario-grupo-input">
                    <input type="text" class="formulario-input" name="nit" id="nit" placeholder="nit"
                pattern="^[0-9]{1,40}$" title="Numeros" required>
                </div>
                <div id="r_nit"></div>
            </div>  
                    <!-- <p class="formulario__input-error"> No coinciden las longitudes.</p> -->
                <br>
                <br>
                <button type="submit" class="btn btn-danger" id="boton" onclick="vacios()" >Enviar</button>
        </div>
        <div class="col-6 col-md-4"></div>
    </div>
    </form>
 </div>
 <!-- <script src="js/registroproovedores.js"></script> -->
</body>
<footer>
  <br>
  <div class="p-3 mb-2 bg-danger text-white">
  <p style="text-align: center">
Proyecto Final Tecnologías web - Andrea y Jose Miguel 2022 &copy; Copyright
  </p>
</div>
</footer>
</html>
