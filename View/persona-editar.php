<h1 class="page-header">
    <?php 
        echo $alm->id_venta != null ? $alm->id_venta : 'Nuevo Registro'; 
    ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Venta</a></li>
  <li class="active"><?php echo $alm->id_venta != null ? $alm->id_venta : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_venta" value="<?php echo $alm->id_venta; ?>" />
    
    <div class="form-group">
        <label>ID del articulo</label>
        <input type="number" name="id_articulo" value="<?php echo $alm->id_articulo; ?>" class="form-control" placeholder="ID articulo"/>
    </div>
    
    <div class="form-group">
        <label>Tipo de tarjeta</label>
        <input type="text" name="tipotarjeta" value="<?php echo $alm->tipotarjeta; ?>" class="form-control" placeholder="Tipo de tarjeta"/>
    </div>
    
    <div class="form-group">
        <label>NIP</label>
        <input type="text" name="nip" value="<?php echo $alm->nip; ?>" class="form-control" placeholder="NIP" pattern="\d{4}" title="Debe contener exactamente 4 caracteres numéricos."/>
    </div>
    
    <div class="form-group">
        <label>ID de la sucursal</label>
        <input type="number" name="id_sucursal" value="<?php echo $alm->id_sucursal; ?>" class="form-control" placeholder="ID de sucursal"/>
    </div>
    
    <div class="form-group">
        <label>Cantidad a pagar</label>
        <input type="number" name="cantidadpagar" value="<?php echo $alm->cantidadpagar; ?>" class="form-control" placeholder="Cantidad a pagar en decimal" step="any"/>
    </div>

    <div class="form-group">
        <label>ID del cliente</label>
        <input type="number" name="id_cliente" value="<?php echo $alm->id_cliente; ?>" class="form-control" placeholder="ID cliente"/>
    </div>
    
    <div class="form-group">
        <label>ID del empleado</label>
        <input type="number" name="id_empleado" value="<?php echo $alm->id_empleado; ?>" class="form-control" placeholder="ID empleado"/>
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
