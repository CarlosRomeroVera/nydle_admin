<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Proyecto Cuentas Extra') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="proyectoCuentasExtra" class="table table-striped table-hover">
          <thead>
              <tr>
                                  <th><?php echo ('id') ?></th>
                                    <th><?php echo ('proyecto_id') ?></th>
                                    <th><?php echo ('name') ?></th>
                                    <th><?php echo ('usuario') ?></th>
                                    <th><?php echo ('contrasenia') ?></th>
                                    <th><?php echo ('activo') ?></th>
                                    <th><?php echo ('created') ?></th>
                                    <th><?php echo ('modified') ?></th>
                                    <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($proyectoCuentasExtra as $proyectoCuentasExtra): ?>
              <tr>
                                  <td><?php echo h($proyectoCuentasExtra->id) ?></td>
                    <td><?php echo $proyectoCuentasExtra->has('proyecto') ? $this->Html->link($proyectoCuentasExtra->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectoCuentasExtra->proyecto->id]) : '' ?></td>
                                              <td><?php echo h($proyectoCuentasExtra->name) ?></td>
                    <td><?php echo h($proyectoCuentasExtra->usuario) ?></td>
                    <td><?php echo h($proyectoCuentasExtra->contrasenia) ?></td>
                    <td><?php echo $proyectoCuentasExtra->activo ? '<span class="label label-success">SI</span>':'<span class="label label-danger">NO</span>'; ?></td>
                    <td><?php echo h($proyectoCuentasExtra->created) ?></td>
                    <td><?php echo h($proyectoCuentasExtra->modified) ?></td>
                <td><?php echo $proyectoCuentasExtra->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#proyectoCuentasExtra').DataTable({
            "dom": 'lCfrtip',
            //dom: 'T<"clear">lfrtip'
            "order": [],
            "colVis": {
                "buttonText": "Columnas",
                "overlayFade": 0,
                "align": "right"
            },
            "language": {
                        "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                        "sZeroRecords": "Sin registros",
                        "sInfo": "Mostrando registros de _START_ a _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Sin registros",
                        "sInfoFiltered": "",//"(Mostrando _MAX_ registros por pagina)",
                        "oPaginate": {
                            "sFirst": "Inicio",
                            "sLast": " Final",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "sSearch": "Filtrar: ",
                        "sProcessing":"Cargando"
                    },
                    "aoColumnDefs": [
                                            { "bSortable": false, "aTargets": [6] }
                                    ]
        });

</script>
