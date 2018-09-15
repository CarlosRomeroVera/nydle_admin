<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Proyecto Users Asignados') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="proyectoUsersAsignado" class="table table-striped table-hover">
          <thead>
              <tr>
                                  <th><?php echo ('id') ?></th>
                                    <th><?php echo ('proyecto_id') ?></th>
                                    <th><?php echo ('user_id') ?></th>
                                    <th><?php echo ('activo') ?></th>
                                    <th><?php echo ('created') ?></th>
                                    <th><?php echo ('modified') ?></th>
                                    <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($proyectoUsersAsignados as $proyectoUsersAsignado): ?>
              <tr>
                                  <td><?php echo h($proyectoUsersAsignado->id) ?></td>
                    <td><?php echo $proyectoUsersAsignado->has('proyecto') ? $this->Html->link($proyectoUsersAsignado->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectoUsersAsignado->proyecto->id]) : '' ?></td>
                                              <td><?php echo $proyectoUsersAsignado->has('user') ? $this->Html->link($proyectoUsersAsignado->user->name, ['controller' => 'Users', 'action' => 'view', $proyectoUsersAsignado->user->id]) : '' ?></td>
                                              <td><?php echo $proyectoUsersAsignado->activo ? '<span class="label label-success">SI</span>':'<span class="label label-danger">NO</span>'; ?></td>
                    <td><?php echo h($proyectoUsersAsignado->created) ?></td>
                    <td><?php echo h($proyectoUsersAsignado->modified) ?></td>
                <td><?php echo $proyectoUsersAsignado->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#proyectoUsersAsignado').DataTable({
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
