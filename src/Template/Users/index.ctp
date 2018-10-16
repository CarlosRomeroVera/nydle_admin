<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('Users') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="user" class="table table-striped table-hover">
          <thead>
              <tr>
                                  <th><?php echo ('id') ?></th>
                                    <th><?php echo ('nombres') ?></th>
                                    <th><?php echo ('apellidos') ?></th>
                                    <th><?php echo ('username') ?></th>
                                    <th><?php echo ('password') ?></th>
                                    <th><?php echo ('grupo_id') ?></th>
                                    <th><?php echo ('ultimo_acceso') ?></th>
                                    <th><?php echo ('correo') ?></th>
                                    <th><?php echo ('telefono') ?></th>
                                    <th><?php echo ('activo') ?></th>
                                    <th><?php echo ('created') ?></th>
                                    <th><?php echo ('modified') ?></th>
                                    <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($users as $user): ?>
              <tr>
                                  <td><?php echo h($user->id) ?></td>
                    <td><?php echo h($user->nombres) ?></td>
                    <td><?php echo h($user->apellidos) ?></td>
                    <td><?php echo h($user->username) ?></td>
                    <td><?php echo h($user->password) ?></td>
                    <td><?php echo h($user->grupo_id) ?></td>
                    <td><?php echo h($user->ultimo_acceso) ?></td>
                    <td><?php echo h($user->email) ?></td>
                    <td><?php echo h($user->telefono) ?></td>
                    <td><?php echo $user->activo ? '<span class="badge badge-success">SI</span>':'<span class="badge badge-danger">NO</span>'; ?></td>
                    <td><?php echo h($user->created) ?></td>
                    <td><?php echo h($user->modified) ?></td>
                <td><?php echo $user->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#user').DataTable({
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
