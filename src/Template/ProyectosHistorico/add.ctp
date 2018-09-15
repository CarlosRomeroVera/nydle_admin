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
                  					         </ul>
                 </div>
		        </div>
		    </div>
        <div class="col-md-9" >
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><?= __('Add Proyectos Historico') ?></h2>
            </div>
          </header>

    			<?php echo  $this->Form->create($proyectosHistorico,['role'=>'form','onsubmit'=>'return checkSubmit();','class'=>'form-horizontal']) ?>
    			<fieldset>    			    
    	                		<?php echo $this->Form->control('proyecto_original_id', ['empty'=>true,'options' => $proyectos,'label'=>['']]);?>
    	                		<?php echo $this->Form->control('name', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('observaciones', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('cliente_id', ['empty'=>true,'options' => $clientes,'label'=>['']]);?>
    	                		<?php echo $this->Form->control('fecha_inicio', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('fecha_vencimiento', ['label'=>[]]); ?>
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
