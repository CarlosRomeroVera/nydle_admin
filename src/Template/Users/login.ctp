<div id="formContainer">
  <div id="form">
		<div id="formLeft" class="f">
			<img src="https://scontent.fmid1-2.fna.fbcdn.net/v/t1.0-9/43695469_1903734243038880_4681395811542630400_n.png?_nc_cat=109&oh=51fe45c91fe70d6afdb59167eda1d161&oe=5C414FBB" alt="Avatar Picture">
		</div>
		<div id="formRight">      
        <?= $this->Form->create(NULL,['role'=>'form','id'=>"login",'class'=>'contentArea']) ?>
				<div class="formHead"></div>
				<label class="formDiv">

					<input type="text" placeholder=" " name="username" required>
					<p>Usuario</p>
					<span class="border"></span>
				</label>
				<label class="formDiv">
					<input type="password" placeholder=" " name="password" required>
					<p>Contraseña</p>
					<span class="border"></span>
				</label>
				<div class="formDiv">
					<input type="submit" value="Ingresar">
				</div>
			<?= $this->Form->end()?>
		</div>
	</div>
</div>
