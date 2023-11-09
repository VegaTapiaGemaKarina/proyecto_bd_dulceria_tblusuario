<h1 class="page-header">Personas</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=usuario&a=Crud">Agregar Persona</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombre</th>
            <th>Apaterno</th>
            <th >Amaterno</th>
            <th >Pass</th>
            <th >direccion</th>
            <th >celular</th>
            <th >email</th> 
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Apaterno; ?></td>
            <td><?php echo $r->Amaterno; ?></td>
            <td><?php echo $r->Pass; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->celular; ?></td>
            <td><?php echo $r->email; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=usuario&a=Crud&idusuario=<?php echo $r->idusuario; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=usuario&a=Eliminar&idusuario=<?php echo $r->idusuario; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
