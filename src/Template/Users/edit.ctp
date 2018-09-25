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
                                    <li><?= $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'),['action' => 'edit', $user->id],['escape'=>false,'class'=>'nav-link'])?></li>
                  <li><?= $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'),['action' => 'delete', $user->id],['confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $user->id),'escape'=>false,'class'=>'nav-link'])?></li>
                  <li><?= $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?></li>
        									         </ul>
                 </div>
		        </div>
		    </div>
        <div class="col-md-9" >
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><?= __('Edit User') ?></h2>
            </div>
          </header>

    			<?php echo  $this->Form->create($user,['role'=>'form','onsubmit'=>'return checkSubmit();','class'=>'form-horizontal']) ?>
    			<fieldset>    			    
    	                		<?php echo $this->Form->control('nombre', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('paterno', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('materno', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('username', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('password', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('grupo_id', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('ultimo_acceso', ['empty' => true,'label'=>['']]); ?>
    	                		<?php echo $this->Form->control('correo', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('telefono', ['label'=>[]]); ?>
    	                		<?php echo $this->Form->control('activo', ['label'=>[]]); ?>
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
