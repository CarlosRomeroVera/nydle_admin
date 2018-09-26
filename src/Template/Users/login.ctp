<?= $this->Form->create(NULL,['role'=>'form','autocomplete'=>"off",'class'=>'form-validate']) ?>
  <div class="form-group">
    <input id="login-username" type="text" name="username" required data-msg="Por favor ingrese su usuario" class="input-material">
    <label for="login-username" class="label-material">Usuario</label>
  </div>
  <div class="form-group">
    <input id="login-password" type="password" name="password" required data-msg="Por favor ingrese su contraseña" class="input-material">
    <label for="login-password" class="label-material">Contraseña</label>
  </div>
  <button type="submit" class="btn btn-outline-primary d-block mx-auto">Ingresar</button>
<?= $this->Form->end()?>
<?php
echo $this->Flash->render('flash');
?>
