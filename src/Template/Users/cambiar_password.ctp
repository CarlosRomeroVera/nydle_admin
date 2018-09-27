<?php
echo $this->Html->script
                                (
                                    array
                                        (
                                            'auxiliares/validator.js'
                                        )
                                );
?>
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
                <li><?= $this->Html->link('<i class="fas fa-list-ul"></i>&nbsp;Listado', ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?></li></ul>
                 </div>
		        </div>
		    </div>
        <div class="col-md-9">
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"><?= __('Cambiar Contraseña') ?></h2>
            </div>
          </header>
              <?php echo  $this->Form->create($user,['role'=>'form','data-toggle'=>'validator','onsubmit'=>'return checkSubmit();','class'=>'form-horizontal']) ?>
              <fieldset>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="password" class="col-sm-12 col-form-label">Contraseña Nueva</label>
                    <?php echo $this->Form->text('password',array('type'=>'password','required'=>'required','class'=>'form-control')); ?>
                  </div>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="conf_password" class="col-sm-12 col-form-label">Confirmar Contraseña</label>
                    <?php echo $this->Form->text('conf_password',array('type'=>'text','required'=>'required','data-match'=>'#password','data-match-error'=>'Los contraseñas no coinciden','class'=>'form-control','placeholder'=>'Repita contraseña nueva')); ?>
                    <br>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group">
                <div class="col-sm-12 mt-3">
                  <?php echo  $this->Form->button(__('Guardar'),['class'=>'btn btn-primary','id'=>'btnGuardar']); ?>
                </div>
              </div>
              <?php echo  $this->Form->end() ?>
    		</div>

  </div>
</div>
