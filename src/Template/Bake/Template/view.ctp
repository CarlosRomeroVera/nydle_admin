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

$associations += ['BelongsTo' => [], 'HasOne' => [], 'HasMany' => [], 'BelongsToMany' => []];
$immediateAssociations = $associations['BelongsTo'];
$associationFields = collection($fields)
    ->map(function($field) use ($immediateAssociations) {
        foreach ($immediateAssociations as $alias => $details) {
            if ($field === $details['foreignKey']) {
                return [$field => $details];
            }
        }
    })
    ->filter()
    ->reduce(function($fields, $value) {
        return $fields + $value;
    }, []);

$groupedFields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->getColumnType($field) !== 'binary';
    })
    ->groupBy(function($field) use ($schema, $associationFields) {
        $type = $schema->getColumnType($field);
        if (isset($associationFields[$field])) {
            return 'string';
        }
        if (in_array($type, ['integer', 'float', 'decimal', 'biginteger'])) {
            return 'number';
        }
        if (in_array($type, ['date', 'time', 'datetime', 'timestamp'])) {
            return 'date';
        }
        return in_array($type, ['text', 'boolean']) ? $type : 'string';
    })
    ->toArray();

$groupedFields += ['number' => [], 'string' => [], 'boolean' => [], 'date' => [], 'text' => []];
$pk = "\$$singularVar->{$primaryKey[0]}";
%>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', <%= $pk %>],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', <%= $pk %>], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', <%= $pk %>)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('<%= $singularVar %>') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
        <% if ($groupedFields['string']) : %>
        <% foreach ($groupedFields['string'] as $field) : %>
        <% if (isset($associationFields[$field])) :
        $details = $associationFields[$field];
        %>
        <dt class="offset-2 col-sm-4"><?= __('<%= Inflector::humanize($details['property']) %>') ?></dt>
        <dd class="col-sm-4"><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></dd>
        <% else : %>
        <dt class="offset-2 col-sm-4"><?= __('<%= Inflector::humanize($field) %>') ?></dt>
        <dd class="col-sm-4"><?= h($<%= $singularVar %>-><%= $field %>) ?></dd>
        <% endif; %>
        <% endforeach; %>
        <% endif; %>
        <% if ($associations['HasOne']) : %>
        <%- foreach ($associations['HasOne'] as $alias => $details) : %>
        <dt class="offset-2 col-sm-4"><?= __('<%= Inflector::humanize(Inflector::singularize(Inflector::underscore($alias))) %>') ?></dt>
        <dd class="col-sm-4"><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></dd>
        <%- endforeach; %>
        <% endif; %>
        <% if ($groupedFields['number']) : %>
        <% foreach ($groupedFields['number'] as $field) : %>
        <dt class="offset-2 col-sm-4"><?= __('<%= Inflector::humanize($field) %>') ?></dt>
        <dd class="col-sm-4"><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></dd>
        <% endforeach; %>
        <% endif; %>
        <% if ($groupedFields['date']) : %>
        <% foreach ($groupedFields['date'] as $field) : %>
        <dt class="offset-2 col-sm-4"><%= "<%= __('" . Inflector::humanize($field) . "') %>" %></dt>
        <dd class="col-sm-4"><?= h($<%= $singularVar %>-><%= $field %>) ?__($<%= $singularVar %>-><%= $field %>->format('d-m-Y h:i:s')) : __('<span class="badge badge-danger">SIN ACCESO</span>');  ?></dd>
        <% endforeach; %>
        <% endif; %>
        <% if ($groupedFields['boolean']) : %>
        <% foreach ($groupedFields['boolean'] as $field) : %>
        <dt class="offset-2 col-sm-4"><?= __('<%= Inflector::humanize($field) %>') ?></dt>
        <dd class="col-sm-4"><?= $<%= $singularVar %>-><%= $field %> ? __('<span class="badge badge-success">SI</span>') : __('<span class="badge badge-danger">NO</span>'); ?></dd>
        <% endforeach; %>
        <% endif; %>
      </dl>
      <% if ($groupedFields['text']) : %>
      <% foreach ($groupedFields['text'] as $field) : %>
      <div class="row">
        <h4><?= __('<%= Inflector::humanize($field) %>') ?></h4>
        <?= $this->Text->autoParagraph(h($<%= $singularVar %>-><%= $field %>)); ?>
      </div>
      <% endforeach; %>
      <% endif; %>
    </div>
  </div>
</div>
