<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="<?php echo RUTA_URL; ?>/paginas" class="btn btn-light"><i class="fa fa-backward"></i>Volver</a>
<h2>Nuevo proyecto</h2>       
    <form action="<?php echo RUTA_URL ?>/paginas/agregar" method="POST">
    <div class="card card-body bg-light mt-5"> 
    <h4>Datos del proyecto</h4>
        <div class="form-group">
            <label for="titulo">T&iacute;tulo de proyecto: <sup>*</sup></label>
            <input type="text" name="titulo" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="lineaInv">L&iacute;nea de investigaci&oacute;n: <sup>*</sup></label>
            <select name="lineaInv" id="lineaInvestigacion">
            <option value="0">Seleccione:</option>
            <?php foreach($datos['instituciones'] as $lineaIn):?>
                    <option value="<?php echo $lineaIn->id ?>"><?php echo $lineaIn->nombre ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripci&oacute;n: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="oGeneral">Objetivo general: <sup>*</sup></label>
            <input type="text" name="oGeneral" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="oEspecifico">Objetivo espec&iacute;fico: <sup>*</sup></label>
            <input type="text" name="oEspecifico" class="form-control form-control-lg">
            <div id="masObj">

            </div>
            <input type="button" id="btn_agregarO" value="+" class="btn btn-outline-primary">
        </div>
        <div class="form-group">
            <label for="institucion">Instituci&oacute;n a realizar la investigaci&oacute;n: <sup>*</sup></label>
            <input type="text" name="institucion" class="form-control form-control-lg">
        </div>
    </div>
    <div class="card card-body bg-light mt-5">
    <h4>Equipo del proyecto</h4>
        <div class="form-group" >
            <label for="gInvestigacion">Equipo de investigadores: <sup>*</sup></label>
            <input type="text" name="gInvestigacion" class="form-control form-control-lg">
            <div id="masInves">

            </div>
            <input type="button" id="btn_agregarI" value="+" class="btn btn-outline-primary">
        </div>
        
    </div>
        <input type="submit" class="btn btn-sucess" value="Agregar Usuario">
        
    </form>

<?php require RUTA_APP . '/vistas/inc/footer.php';?>