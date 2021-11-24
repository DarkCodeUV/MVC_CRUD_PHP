<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=usuarios&&accion=crear" role="button">Agregar usuario</a>
    
    </div>
    <div class="card-body">
    

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario ){ ?>
            
            <tr>
                <td><?php echo $usuario->id;?></td>
                <td><?php echo $usuario->nombre;?></td>
                <td><?php echo $usuario->apellidoP;?></td>
                <td><?php echo $usuario->apellidoM;?></td>
                <td><?php echo $usuario->correo;?></td>
                <td><?php echo $usuario->contraseña;?></td>
                <td><?php echo $usuario->telefono;?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=usuarios&&accion=editar&id=<?php echo $usuario->id;?>" type="button" class="btn btn-primary">Editar</a>   
                        <a href="?controlador=usuarios&&accion=borrar&id=<?php echo $usuario->id;?>" type="button" class="btn btn-danger">Borrar</a>        
                    </div>
                
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</div>
    
</div>







