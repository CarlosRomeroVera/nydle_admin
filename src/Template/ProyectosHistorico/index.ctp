<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Proyectos Historico') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="proyectosHistorico" class="table table-striped table-hover">
          <thead>
              <tr>
                                  <th><?php echo ('id') ?></th>
                                    <th><?php echo ('proyecto_original_id') ?></th>
                                    <th><?php echo ('name') ?></th>
                                    <th><?php echo ('cliente_id') ?></th>
                                    <th><?php echo ('fecha_inicio') ?></th>
                                    <th><?php echo ('fecha_vencimiento') ?></th>
                                    <th><?php echo ('created') ?></th>
                                    <th><?php echo ('modified') ?></th>
                                    <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($proyectosHistorico as $proyectoHistorico): ?>                
              <tr>
                                  <td><?php echo h($proyectoHistorico->id) ?></td>
                    <td><?php echo $proyectoHistorico->has('proyecto') ? $this->Html->link($proyectoHistorico->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectoHistorico->proyecto->id]) : '' ?></td>
                                              <td><?php echo h($proyectoHistorico->name) ?></td>
                    <td><?php echo $proyectoHistorico->has('cliente') ? $this->Html->link($proyectoHistorico->cliente->name, ['controller' => 'Clientes', 'action' => 'view', $proyectoHistorico->cliente->id]) : '' ?></td>
                                              <td><?php echo h($proyectoHistorico->fecha_inicio) ?></td>
                    <td><?php echo h($proyectoHistorico->fecha_vencimiento) ?></td>
                    <td><?php echo h($proyectoHistorico->created) ?></td>
                    <td><?php echo h($proyectoHistorico->modified) ?></td>
                <td><?php echo $proyectoHistorico->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#proyectosHistorico').DataTable({
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
