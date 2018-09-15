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
        return $schema->getColumnType($field) !== 'binary';
    });

if (isset($modelObject) && $modelObject->hasBehavior('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}
%>
<script type="text/javascript">
var statSend = false;
function checkSubmit()
{
    if (!statSend)
    {
        statSend = true;
        document.getElementById('btnGuardar').disabled = true;
        return true;
    }
    else
    {
        alert("El formulario ya se esta enviando...");
        return false;
    }
}
</script>
<?php
$this->loadHelper('Form', ['templates' => 'app_form']);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
    		<div class="card">
		        <div class="card-header">
              <strong>Acciones</strong>
            </div>
		        <div class="card-body">
              <ul class="nav flex-column">
                <li><?= $this->Html->link('<i class="fas fa-list-ul"></i>&nbsp;Listado', ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?></li>
                  <% if (strpos($action, 'add') === false): %>
                  <li><?= $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'),['action' => 'edit', $<%= $singularVar %>-><%= $primaryKey[0] %>],['escape'=>false,'class'=>'nav-link'])?></li>
                  <li><?= $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'),['action' => 'delete', $<%= $singularVar %>-><%= $primaryKey[0] %>],['confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $<%= $singularVar %>-><%= $primaryKey[0] %>),'escape'=>false,'class'=>'nav-link'])?></li>
                  <li><?= $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?></li>
        				<% endif; %>
					         </ul>
                 </div>
		        </div>
		    </div>
        <div class="col-md-9" >
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><?= __('<%= Inflector::humanize($action) %> <%= $singularHumanName %>') ?></h2>
            </div>
          </header>

    			<?php echo  $this->Form->create($<%= $singularVar %>,['role'=>'form','onsubmit'=>'return checkSubmit();','class'=>'form-horizontal']) ?>
    			<fieldset>    			    
    	<%
    	        foreach ($fields as $field)
    	        {

    	            if (in_array($field, $primaryKey))
    	            {
    	                continue;
    	            }
    	            if (isset($keyFields[$field]))
    	            {
    	                $fieldData = $schema->getColumn($field);
    	                if (!empty($fieldData['null']))
    	                {
    	%>
                		<?php echo $this->Form->control('<%= $field %>', ['options' => $<%= $keyFields[$field] %>, 'empty' => true,'label'=>['']]); ?>
    	<%
    	                }
    	                else
    	                {
    	%>
                		<?php echo $this->Form->control('<%= $field %>', ['empty'=>true,'options' => $<%= $keyFields[$field] %>,'label'=>['']]);?>
    	<%
    	                }
    	                continue;
    	            }
    	            if (!in_array($field, ['created', 'modified', 'updated']))
    	            {
    	                $fieldData = $schema->getColumn($field);
    	                if (in_array($fieldData['type'], ['date', 'datetime', 'time']) && (!empty($fieldData['null'])))
    	                {
    	%>
                		<?php echo $this->Form->control('<%= $field %>', ['empty' => true,'label'=>['']]); ?>
    	<%
    	                }
    	                else
    	                {
    	%>
                		<?php echo $this->Form->control('<%= $field %>', ['label'=>[]]); ?>
    	<%
    	                }
    	            }
    	        }
    	        if (!empty($associations['BelongsToMany']))
    	        {
    	            foreach ($associations['BelongsToMany'] as $assocName => $assocData)
    	            {
    	%>
                	<?php echo $this->Form->control('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>,'label'=>[]]); ?>
    	<%
    	            }
    	        }
    	%>
    			</fieldset>
          <div class="form-group">
            <div class="offset-2 col-sm-10 mt-3">
              <?php echo  $this->Form->button(__('Guardar'),['class'=>'btn btn-primary','id'=>'btnGuardar']); ?>
            </div>
          </div>
    			<?php echo  $this->Form->end() ?>

    		</div>

  </div>
</div>
<%
	 if (!empty($associations['BelongsToMany']) || !empty($associations['BelongsTo']))
	 {
%>
<script type="text/javascript">
	$(document).ready(function()
	{
	  $(".select2").select2
	  (
		  {
			  placeholder: "SELECCIONAR:",
			  allowClear: false,
       'width': '100%',

		  }
	  );
	});
</script>
<%
	 }
	%>
