<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Proyectos Cuentas Extra') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="proyectosCuentasExtra" class="table table-striped table-hover">
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
              <?php foreach ($proyectosCuentasExtra as $proyectosCuentasExtra): ?>
              <tr>
                                  <td><?php echo h($proyectosCuentasExtra->id) ?></td>
                    <td><?php echo $proyectosCuentasExtra->has('proyecto') ? $this->Html->link($proyectosCuentasExtra->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectosCuentasExtra->proyecto->id]) : '' ?></td>
                                              <td><?php echo h($proyectosCuentasExtra->name) ?></td>
                    <td><?php echo h($proyectosCuentasExtra->usuario) ?></td>
                    <td><?php echo h($proyectosCuentasExtra->contrasenia) ?></td>
                    <td><?php echo $proyectosCuentasExtra->activo ? '<span class="badge badge-success">SI</span>':'<span class="badge badge-danger">NO</span>'; ?></td>
                    <td><?php echo h($proyectosCuentasExtra->created) ?></td>
                    <td><?php echo h($proyectosCuentasExtra->modified) ?></td>
                <td><?php echo $proyectosCuentasExtra->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#proyectosCuentasExtra').DataTable({
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
