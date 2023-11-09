<h1 class="page-header">
    <?php echo $alm->idusuario != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Personas</a></li>
  <li class="active"><?php echo $alm->idusuario != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idusuario" value="<?php echo $alm->idusuario; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Apellido paterno</label>
        <input type="text" name="Apaterno" value="<?php echo $alm->Apaterno; ?>" class="form-control" placeholder="Ingrese su Apellido Paterno" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Apellido materno</label>
        <input type="text" name="Amaterno" value="<?php echo $alm->Amaterno; ?>" class="form-control" placeholder="Ingrese su Apellido Materno" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="Pass" value="<?php echo $alm->Pass; ?>" class="form-control" placeholder="Ingrese su contraseña" data-validacion-tipo="requerido|min:8" />
    </div>
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|min:8" />
    </div>
    <div class="form-group">
        <label>Celular</label>
        <input type="text" name="celular" value="<?php echo $alm->celular; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|min:8" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido||min:8" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
