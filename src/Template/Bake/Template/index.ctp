<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->getColumnType($field), ['binary', 'text']);
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}

if (!empty($indexColumns)) {
    $fields = $fields->take($indexColumns);
}

%>
<header class="page-header">
  <div class="container-fluid">
    <h3 class="no-margin-bottom"><?php echo __('<%= $pluralHumanName %>') ?></h3>
    <div class="text-right" style="margin-bottom: 10px;">
      <?php echo $this->Html->link(__('Nuevo Registro'), ['action' => 'add'],['class'=>'btn btn-dark','escape'=>false]) ?>
    </div>
  </div>
</header>
<div class="card" style="padding: 20px;">
  <div class="car-body">
    <div class="table-responsive">
      <table id="<%= $singularVar %>" class="table table-striped table-hover">
          <thead>
              <tr>
                <% foreach ($fields as $field): %>
                  <th><?php echo ('<%= $field %>') ?></th>
                  <% endforeach; %>
                  <th><?php echo __('Acciones') ?></th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
              <tr>
                <%        foreach ($fields as $field) {
                  $isKey = false;
                  if (!empty($associations['BelongsTo'])) {
                    foreach ($associations['BelongsTo'] as $alias => $details) {
                        if ($field === $details['foreignKey']) {
                            $isKey = true;
                            %>
                  <td><?php echo $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
                            <%
                          break;
                      }
                  }
              }
              if ($isKey !== true) {
                  if (!in_array($schema->getColumnType($field), ['integer', 'boolean','biginteger', 'decimal', 'float'])) {
  %>
                  <td><?php echo h($<%= $singularVar %>-><%= $field %>) ?></td>
  <%
                  }
                  elseif(in_array($schema->getColumnType($field), ['boolean'])){
  %>
                  <td><?php echo $<%= $singularVar %>-><%= $field %> ? '<span class="label label-success">SI</span>':'<span class="label label-danger">NO</span>'; ?></td>
  <%
                  }
                  else {
  %>
                  <td><?php echo $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
  <%
                  }
              }
          }

          $pk = '$' . $singularVar . '->' . $primaryKey[0];
  %>
              <td><?php echo $<%= $singularVar %>->acciones?></td>
              </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" charset="utf-8">
    var tabla = $('#<%= $singularVar %>').DataTable({
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
