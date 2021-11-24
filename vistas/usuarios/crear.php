<div class="card">
    <div class="card-header">
       Agregar usuarios
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input required type="text" 
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
              <label for="apellidoP" class="form-label">Apellido Paterno</label>
              <input required type="text" 
                class="form-control" name="apellidoP" id="apellidoP" aria-describedby="helpId" placeholder="Ingrese su apellido paterno">
            </div>

            <div class="mb-3">
              <label for="apellidoM" class="form-label">Apellido Materno</label>
              <input required type="text"
                class="form-control" name="apellidoM" id="apellidoM" aria-describedby="helpId" placeholder="Ingrese su apellido materno">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input  required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="example@mail.com">
            </div>

            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input required type="password"  class="form-control" name="contraseña" id="contraseña" aria-describedby="passwordHelpId" placeholder="**********">
            </div>

            <div class="mb-3">
              <label for="telefono" class="form-label">Telefono</label>
              <input required type="number"  class="form-control" name="telefono" id="telefono" aria-describedby="HelpId" placeholder="+52 000 000 00 00">
            </div>

            <input name="" id="" class="btn-success" type="submit" value="Agregar Usuario">
  
          </form>    


    </div>
</div>
