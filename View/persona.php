<h1 class="page-header">Tabla venta</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Persona&a=Crud">Agregar una venta</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID Venta</th>
            <th>ID Articulo</th>
            <th>Tipo de tarjeta</th>
            <th>NIP</th>
            <th>ID de Sucursal</th>
            <th>Cantidad a pagar</th>
            <th>ID del cliente</th>
            <th>ID del empleado</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_venta; ?></td>
            <td><?php echo $r->id_articulo; ?></td>
            <td><?php echo $r->tipotarjeta; ?></td>
            <td><?php echo $r->nip; ?></td>
            <td><?php echo $r->id_sucursal; ?></td>
            <td><?php echo $r->cantidadpagar; ?></td>
            <td><?php echo $r->id_cliente; ?></td>
            <td><?php echo $r->id_empleado; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Persona&a=Crud&id_venta=<?php echo $r->id_venta; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Persona&a=Eliminar&id_venta=<?php echo $r->id_venta; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
