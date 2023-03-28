<form id="msform" method="POST">
  <fieldset>
    <h2 class="fs-title">Registro de personas</h2>

    <!--Mensaje alertas-->
    <?php
    if (isset($_GET["msg"]) && $_GET['msg']) {
        echo '<div class="div-alerta div-correcto"> Persona agregada correctamente. </div>';
    } elseif (isset($_GET["msg"]) && !$_GET['msg']) {
        echo '<div class="div-alerta div-incorrecto"> Por favor, verifique los campos. </div>';
    }
    ?>

    <!--Campos del formulario y botones-->
    <div class="input-info">
        <label for="input-nombre">Nombres</label>
        <input type="text" id="input-nombres" name="nombre">
    </div>
    <div class="input-info">
        <label for="input-apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="input-apellidos" name="apellidos">
    </div>
    <button class="button" type="submit" name="guardar_persona" value="ok">Agregar</button>
    <button class="button-finalizar" type="button" id="btn-finalizar" onclick="return clickFinalizar()" name="btnfinalizar" value="ok">Finalizar</button>
  </fieldset>
</form>