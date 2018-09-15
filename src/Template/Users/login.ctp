<?= $this->Form->create(null,['role'=>'form','autocomplete'=>"off",'class'=>'form-validate']) ?>
<!-- <form method="post" class="form-validate"> -->
  <div class="form-group">
    <input id="login-username" type="text" name="loginUsername" required data-msg="Por favor ingrese su usuario" class="input-material">
    <label for="login-username" class="label-material">Usuario</label>
  </div>
  <div class="form-group">
    <input id="login-password" type="password" name="loginPassword" required data-msg="Por favor ingrese su contraseña" class="input-material">
    <label for="login-password" class="label-material">Contraseña</label>
  </div>
  <!-- <a id="login" href="index.html" class="btn btn-primary">Ingresar</a> -->
  <button type="submit" class="btn btn-primary">Ingresar</button>
  
  <!-- This should be submit button but I replaced it with <a> for demo purposes-->
<!-- </form> -->
<?= $this->Form->end()?>
<!-- <a href="#" class="forgot-pass">¿Olvido su contraseña?</a> -->

<!-- <br>
<small>Do not have an account? </small>
<a href="register.html" class="signup">Signup</a> -->
<?php
echo $this->Flash->render('flash');
?>
