<section id="div-listado" style="display:none;">
  <h1>Lista de personas registradas</h1>
    <!-- Cabecera tabla -->
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
        </tr>
      </thead>
    </table>
  </div>
  <!-- Cuerpo tabla -->
  <div class="tbl-content" style="height:<?php echo ( count($datos_personas) > 6 ) ? '300px' : '100%'; ?>;">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php foreach ($datos_personas as $dato_persona) :?>
                <tr>
                    <td><?= $dato_persona['nombre'] ?></td>
                    <td><?= $dato_persona['apellidos'] ?></td>
                </tr>
            <?php endforeach;?>
      </tbody>
    </table>
  </div>
    <button class="button-volver" style="width:auto;" type="button" id="btn-volver" onclick="clickVolver()">⬅️ Volver al formulario</button>
</section>

