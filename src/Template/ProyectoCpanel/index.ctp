<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Proyecto Cpanel') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="proyectoCpanel" class="table table-striped table-hover">
          <thead>
              <tr>
                                  <th><?php echo ('id') ?></th>
                                    <th><?php echo ('proyeto_id') ?></th>
                                    <th><?php echo ('usuario_cpanel') ?></th>
                                    <th><?php echo ('contrasenia_cpanel') ?></th>
                                    <th><?php echo ('activo') ?></th>
                                    <th><?php echo ('created') ?></th>
                                    <th><?php echo ('modified') ?></th>
                                    <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($proyectoCpanel as $proyectoCpanel): ?>
              <tr>
                                  <td><?php echo h($proyectoCpanel->id) ?></td>
                    <td><?php echo h($proyectoCpanel->proyeto_id) ?></td>
                    <td><?php echo h($proyectoCpanel->usuario_cpanel) ?></td>
                    <td><?php echo h($proyectoCpanel->contrasenia_cpanel) ?></td>
                    <td><?php echo $proyectoCpanel->activo ? '<span class="label label-success">SI</span>':'<span class="label label-danger">NO</span>'; ?></td>
                    <td><?php echo h($proyectoCpanel->created) ?></td>
                    <td><?php echo h($proyectoCpanel->modified) ?></td>
                <td><?php echo $proyectoCpanel->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#proyectoCpanel').DataTable({
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
