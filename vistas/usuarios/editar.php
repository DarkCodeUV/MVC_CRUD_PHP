<div class="card">
    <div class="card-header">
       Agregar usuarios
    </div>
    <div class="card-body">
        <form action="" method="post">
        
            <div class="mb-3">
              <label for="id" class="form-label">ID:</label>
              <input readonly type="text"
                class="form-control" value="<?php echo $usuario->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID empleado">
              
            </div>


            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" value="<?php echo $usuario->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
              <label for="apellidoP" class="form-label">Apellido Paterno</label>
              <input type="text"
                class="form-control" value="<?php echo $usuario->apellidoP; ?>" name="apellidoP" id="apellidoP" aria-describedby="helpId" placeholder="Ingrese su apellido paterno">
            </div>

            <div class="mb-3">
              <label for="apellidoM" class="form-label">Apellido Materno</label>
              <input type="text"
                class="form-control" value="<?php echo $usuario->apellidoM; ?>" name="apellidoM" id="apellidoM" aria-describedby="helpId" placeholder="Ingrese su apellido materno">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" value="<?php echo $usuario->correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="example@mail.com">
            </div>

            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="password" value="<?php echo $usuario->contraseña; ?>" class="form-control" name="contraseña" id="contraseña" aria-describedby="passwordHelpId" placeholder="**********">
            </div>

            <div class="mb-3">
              <label for="telefono" class="form-label">Telefono</label>
              <input type="text" value="<?php echo $usuario->telefono; ?>" class="form-control" name="telefono" id="telefono" placeholder="+52 000 000 00 00">
            </div>

           
            <div class="btn-group" role="group" aria-label="">
            <input name="actualizar" id="actualizar" class="btn-success" type="submit" value="Actualizar usuario">
               <a href="?controlador=usuarios&&accion=inicio" type="button" class="btn btn-danger">Cancelar</a>        
       
            </div>
        </form>    


    </div>
</div>
