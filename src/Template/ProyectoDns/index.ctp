<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Proyecto Dns') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="proyectoDn" class="table table-striped table-hover">
          <thead>
              <tr>
                                  <th><?php echo ('id') ?></th>
                                    <th><?php echo ('proyecto_id') ?></th>
                                    <th><?php echo ('name') ?></th>
                                    <th><?php echo ('ip_servidor') ?></th>
                                    <th><?php echo ('nameserver') ?></th>
                                    <th><?php echo ('activo') ?></th>
                                    <th><?php echo ('created') ?></th>
                                    <th><?php echo ('modified') ?></th>
                                    <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($proyectoDns as $proyectoDn): ?>
              <tr>
                                  <td><?php echo h($proyectoDn->id) ?></td>
                    <td><?php echo $proyectoDn->has('proyecto') ? $this->Html->link($proyectoDn->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectoDn->proyecto->id]) : '' ?></td>
                                              <td><?php echo h($proyectoDn->name) ?></td>
                    <td><?php echo h($proyectoDn->ip_servidor) ?></td>
                    <td><?php echo h($proyectoDn->nameserver) ?></td>
                    <td><?php echo $proyectoDn->activo ? '<span class="badge badge-success">SI</span>':'<span class="badge badge-danger">NO</span>'; ?></td>
                    <td><?php echo h($proyectoDn->created) ?></td>
                    <td><?php echo h($proyectoDn->modified) ?></td>
                <td><?php echo $proyectoDn->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#proyectoDn').DataTable({
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
